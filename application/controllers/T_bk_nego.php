<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_bk_nego extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_bk_nego_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_bk_nego = $this->T_bk_nego_model->get_all();

        $data = array(
            't_bk_nego_data' => $t_bk_nego
        );

        $this->load->view('menu/bk_nego/t_bk_nego_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_bk_nego_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_nego' => $row->id_nego,
		'tgl' => $row->tgl,
		'brg_jasa' => $row->brg_jasa,
		'no_spk' => $row->no_spk,
		'no_hasil' => $row->no_hasil,
		'rekanan' => $row->rekanan,
		'ket' => $row->ket,
	    );
            $this->load->view('menu/bk_nego/t_bk_nego_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_nego'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_bk_nego/create_action'),
	    'id_nego' => set_value('id_nego'),
	    'tgl' => set_value('tgl'),
	    'brg_jasa' => set_value('brg_jasa'),
	    'no_spk' => set_value('no_spk'),
	    'no_hasil' => set_value('no_hasil'),
	    'rekanan' => set_value('rekanan'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('menu/bk_nego/t_bk_nego_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_jasa' => $this->input->post('brg_jasa',TRUE),
		'no_spk' => $this->input->post('no_spk',TRUE),
		'no_hasil' => $this->input->post('no_hasil',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_bk_nego_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_bk_nego'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_bk_nego_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_bk_nego/update_action'),
		'id_nego' => set_value('id_nego', $row->id_nego),
		'tgl' => set_value('tgl', $row->tgl),
		'brg_jasa' => set_value('brg_jasa', $row->brg_jasa),
		'no_spk' => set_value('no_spk', $row->no_spk),
		'no_hasil' => set_value('no_hasil', $row->no_hasil),
		'rekanan' => set_value('rekanan', $row->rekanan),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('menu/bk_nego/t_bk_nego_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_nego'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_nego', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_jasa' => $this->input->post('brg_jasa',TRUE),
		'no_spk' => $this->input->post('no_spk',TRUE),
		'no_hasil' => $this->input->post('no_hasil',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_bk_nego_model->update($this->input->post('id_nego', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_bk_nego'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_bk_nego_model->get_by_id($id);

        if ($row) {
            $this->T_bk_nego_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_bk_nego'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_nego'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('brg_jasa', 'brg jasa', 'trim|required');
	$this->form_validation->set_rules('no_spk', 'no spk', 'trim|required');
	$this->form_validation->set_rules('no_hasil', 'no hasil', 'trim|required');
	$this->form_validation->set_rules('rekanan', 'rekanan', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_nego', 'id_nego', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_bk_nego.xls";
        $judul = "t_bk_nego";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Brg Jasa");
	xlsWriteLabel($tablehead, $kolomhead++, "No Spk");
	xlsWriteLabel($tablehead, $kolomhead++, "No Hasil");
	xlsWriteLabel($tablehead, $kolomhead++, "Rekanan");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");

	foreach ($this->T_bk_nego_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->brg_jasa);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_spk);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_hasil);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rekanan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_bk_nego.doc");

        $data = array(
            't_bk_nego_data' => $this->T_bk_nego_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/bk_nego/t_bk_nego_doc',$data);
    }

}

/* End of file T_bk_nego.php */
/* Location: ./application/controllers/T_bk_nego.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:23:57 */
/* http://harviacode.com */