<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_surat_tgs extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_surat_tgs_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_surat_tgs = $this->T_surat_tgs_model->get_all();

        $data = array(
            't_surat_tgs_data' => $t_surat_tgs
        );

        $this->load->view('menu/s_tgs/t_surat_tgs_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_surat_tgs_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_srt_tgs' => $row->id_srt_tgs,
		'tgl' => $row->tgl,
		'dasar_tgs' => $row->dasar_tgs,
		'kepada' => $row->kepada,
		'petunjuk_no' => $row->petunjuk_no,
	    );
            $this->load->view('menu/s_tgs/t_surat_tgs_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_tgs'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_surat_tgs/create_action'),
	    'id_srt_tgs' => set_value('id_srt_tgs'),
	    'tgl' => set_value('tgl'),
	    'dasar_tgs' => set_value('dasar_tgs'),
	    'kepada' => set_value('kepada'),
	    'petunjuk_no' => set_value('petunjuk_no'),
	);
        $this->load->view('menu/s_tgs/t_surat_tgs_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'dasar_tgs' => $this->input->post('dasar_tgs',TRUE),
		'kepada' => $this->input->post('kepada',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_surat_tgs_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_surat_tgs'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_surat_tgs_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_surat_tgs/update_action'),
		'id_srt_tgs' => set_value('id_srt_tgs', $row->id_srt_tgs),
		'tgl' => set_value('tgl', $row->tgl),
		'dasar_tgs' => set_value('dasar_tgs', $row->dasar_tgs),
		'kepada' => set_value('kepada', $row->kepada),
		'petunjuk_no' => set_value('petunjuk_no', $row->petunjuk_no),
	    );
            $this->load->view('menu/s_tgs/t_surat_tgs_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_tgs'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_srt_tgs', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'dasar_tgs' => $this->input->post('dasar_tgs',TRUE),
		'kepada' => $this->input->post('kepada',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_surat_tgs_model->update($this->input->post('id_srt_tgs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_surat_tgs'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_surat_tgs_model->get_by_id($id);

        if ($row) {
            $this->T_surat_tgs_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_surat_tgs'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_tgs'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('dasar_tgs', 'dasar tgs', 'trim|required');
	$this->form_validation->set_rules('kepada', 'kepada', 'trim|required');
	$this->form_validation->set_rules('petunjuk_no', 'petunjuk no', 'trim|required');

	$this->form_validation->set_rules('id_srt_tgs', 'id_srt_tgs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_surat_tgs.xls";
        $judul = "t_surat_tgs";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Dasar Tgs");
	xlsWriteLabel($tablehead, $kolomhead++, "Kepada");
	xlsWriteLabel($tablehead, $kolomhead++, "Petunjuk No");

	foreach ($this->T_surat_tgs_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->dasar_tgs);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kepada);
	    xlsWriteLabel($tablebody, $kolombody++, $data->petunjuk_no);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=t_surat_tgs.doc");

        $data = array(
            't_surat_tgs_data' => $this->T_surat_tgs_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/s_tgs/t_surat_tgs_doc',$data);
    }

}

/* End of file T_surat_tgs.php */
/* Location: ./application/controllers/T_surat_tgs.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:30 */
/* http://harviacode.com */