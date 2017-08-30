<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_register_sk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_register_sk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_register_sk = $this->T_register_sk_model->get_all();

        $data = array(
            't_register_sk_data' => $t_register_sk
        );

        $this->load->view('menu/regis_sk/t_register_sk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_register_sk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'tgl' => $row->tgl,
		'no' => $row->no,
		'kpd' => $row->kpd,
		'isi_surat' => $row->isi_surat,
		'no_surat' => $row->no_surat,
	    );
            $this->load->view('menu/regis_sk/t_register_sk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_register_sk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_register_sk/create_action'),
	    'id' => set_value('id'),
	    'tgl' => set_value('tgl'),
	    'no' => set_value('no'),
	    'kpd' => set_value('kpd'),
	    'isi_surat' => set_value('isi_surat'),
	    'no_surat' => set_value('no_surat'),
	);
        $this->load->view('menu/regis_sk/t_register_sk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'no' => $this->input->post('no',TRUE),
		'kpd' => $this->input->post('kpd',TRUE),
		'isi_surat' => $this->input->post('isi_surat',TRUE),
		'no_surat' => $this->input->post('no_surat',TRUE),
	    );

            $this->T_register_sk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_register_sk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_register_sk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_register_sk/update_action'),
		'id' => set_value('id', $row->id),
		'tgl' => set_value('tgl', $row->tgl),
		'no' => set_value('no', $row->no),
		'kpd' => set_value('kpd', $row->kpd),
		'isi_surat' => set_value('isi_surat', $row->isi_surat),
		'no_surat' => set_value('no_surat', $row->no_surat),
	    );
            $this->load->view('menu/regis_sk/t_register_sk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_register_sk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'no' => $this->input->post('no',TRUE),
		'kpd' => $this->input->post('kpd',TRUE),
		'isi_surat' => $this->input->post('isi_surat',TRUE),
		'no_surat' => $this->input->post('no_surat',TRUE),
	    );

            $this->T_register_sk_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_register_sk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_register_sk_model->get_by_id($id);

        if ($row) {
            $this->T_register_sk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_register_sk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_register_sk'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('no', 'no', 'trim|required');
	$this->form_validation->set_rules('kpd', 'kpd', 'trim|required');
	$this->form_validation->set_rules('isi_surat', 'isi surat', 'trim|required');
	$this->form_validation->set_rules('no_surat', 'no surat', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_register_sk.xls";
        $judul = "t_register_sk";
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
	xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Kpd");
	xlsWriteLabel($tablehead, $kolomhead++, "Isi Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "No Surat");

	foreach ($this->T_register_sk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kpd);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isi_surat);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_surat);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_register_sk.doc");

        $data = array(
            't_register_sk_data' => $this->T_register_sk_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/regis_sk/t_register_sk_doc',$data);
    }

}

/* End of file T_register_sk.php */
/* Location: ./application/controllers/T_register_sk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:17 */
/* http://harviacode.com */