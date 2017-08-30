<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_surat_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_surat_keluar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_surat_keluar = $this->T_surat_keluar_model->get_all();

        $data = array(
            't_surat_keluar_data' => $t_surat_keluar
        );

        $this->load->view('menu/s_keluar/t_surat_keluar_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_surat_keluar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_srt_keluar' => $row->id_srt_keluar,
		'tgl_surat' => $row->tgl_surat,
		'kepada' => $row->kepada,
		'perihal' => $row->perihal,
		'petunjuk_no' => $row->petunjuk_no,
	    );
            $this->load->view('menu/s_keluar/t_surat_keluar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_keluar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_surat_keluar/create_action'),
	    'id_srt_keluar' => set_value('id_srt_keluar'),
	    'tgl_surat' => set_value('tgl_surat'),
	    'kepada' => set_value('kepada'),
	    'perihal' => set_value('perihal'),
	    'petunjuk_no' => set_value('petunjuk_no'),
	);
        $this->load->view('menu/s_keluar/t_surat_keluar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl_surat' => $this->input->post('tgl_surat',TRUE),
		'kepada' => $this->input->post('kepada',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_surat_keluar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_surat_keluar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_surat_keluar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_surat_keluar/update_action'),
		'id_srt_keluar' => set_value('id_srt_keluar', $row->id_srt_keluar),
		'tgl_surat' => set_value('tgl_surat', $row->tgl_surat),
		'kepada' => set_value('kepada', $row->kepada),
		'perihal' => set_value('perihal', $row->perihal),
		'petunjuk_no' => set_value('petunjuk_no', $row->petunjuk_no),
	    );
            $this->load->view('menu/s_keluar/t_surat_keluar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_keluar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_srt_keluar', TRUE));
        } else {
            $data = array(
		'tgl_surat' => $this->input->post('tgl_surat',TRUE),
		'kepada' => $this->input->post('kepada',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_surat_keluar_model->update($this->input->post('id_srt_keluar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_surat_keluar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_surat_keluar_model->get_by_id($id);

        if ($row) {
            $this->T_surat_keluar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_surat_keluar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_keluar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl_surat', 'tgl surat', 'trim|required');
	$this->form_validation->set_rules('kepada', 'kepada', 'trim|required');
	$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
	$this->form_validation->set_rules('petunjuk_no', 'petunjuk no', 'trim|required');

	$this->form_validation->set_rules('id_srt_keluar', 'id_srt_keluar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_surat_keluar.xls";
        $judul = "t_surat_keluar";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Kepada");
	xlsWriteLabel($tablehead, $kolomhead++, "Perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "Petunjuk No");

	foreach ($this->T_surat_keluar_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kepada);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
	    xlsWriteNumber($tablebody, $kolombody++, $data->petunjuk_no);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_surat_keluar.doc");

        $data = array(
            't_surat_keluar_data' => $this->T_surat_keluar_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/s_keluar/t_surat_keluar_doc',$data);
    }

}

/* End of file T_surat_keluar.php */
/* Location: ./application/controllers/T_surat_keluar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:22 */
/* http://harviacode.com */