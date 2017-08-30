<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_reg_kontrak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_reg_kontrak_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_reg_kontrak = $this->T_reg_kontrak_model->get_all();

        $data = array(
            't_reg_kontrak_data' => $t_reg_kontrak
        );

        $this->load->view('menu/reg_kontrak/t_reg_kontrak_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_reg_kontrak_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_kontrak' => $row->id_kontrak,
		'tgl' => $row->tgl,
		'kpd' => $row->kpd,
		'isi_surat' => $row->isi_surat,
		'petunjuk' => $row->petunjuk,
	    );
            $this->load->view('menu/reg_kontrak/t_reg_kontrak_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_reg_kontrak'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_reg_kontrak/create_action'),
	    'id_kontrak' => set_value('id_kontrak'),
	    'tgl' => set_value('tgl'),
	    'kpd' => set_value('kpd'),
	    'isi_surat' => set_value('isi_surat'),
	    'petunjuk' => set_value('petunjuk'),
	);
        $this->load->view('menu/reg_kontrak/t_reg_kontrak_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'kpd' => $this->input->post('kpd',TRUE),
		'isi_surat' => $this->input->post('isi_surat',TRUE),
		'petunjuk' => $this->input->post('petunjuk',TRUE),
	    );

            $this->T_reg_kontrak_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_reg_kontrak'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_reg_kontrak_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_reg_kontrak/update_action'),
		'id_kontrak' => set_value('id_kontrak', $row->id_kontrak),
		'tgl' => set_value('tgl', $row->tgl),
		'kpd' => set_value('kpd', $row->kpd),
		'isi_surat' => set_value('isi_surat', $row->isi_surat),
		'petunjuk' => set_value('petunjuk', $row->petunjuk),
	    );
            $this->load->view('menu/reg_kontrak/t_reg_kontrak_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_reg_kontrak'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kontrak', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'kpd' => $this->input->post('kpd',TRUE),
		'isi_surat' => $this->input->post('isi_surat',TRUE),
		'petunjuk' => $this->input->post('petunjuk',TRUE),
	    );

            $this->T_reg_kontrak_model->update($this->input->post('id_kontrak', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_reg_kontrak'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_reg_kontrak_model->get_by_id($id);

        if ($row) {
            $this->T_reg_kontrak_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_reg_kontrak'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_reg_kontrak'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('kpd', 'kpd', 'trim|required');
	$this->form_validation->set_rules('isi_surat', 'isi surat', 'trim|required');
	$this->form_validation->set_rules('petunjuk', 'petunjuk', 'trim|required');

	$this->form_validation->set_rules('id_kontrak', 'id_kontrak', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_reg_kontrak.xls";
        $judul = "t_reg_kontrak";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl");
	xlsWriteLabel($tablehead, $kolomhead++, "Kpd");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Petunjuk");

	foreach ($this->T_reg_kontrak_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kpd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->petunjuk);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_reg_kontrak.doc");

        $data = array(
            't_reg_kontrak_data' => $this->T_reg_kontrak_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/reg_kontrak/t_reg_kontrak_doc',$data);
    }

}

/* End of file T_reg_kontrak.php */
/* Location: ./application/controllers/T_reg_kontrak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:12 */
/* http://harviacode.com */