<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_surat_masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_surat_masuk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_surat_masuk = $this->T_surat_masuk_model->get_all();

        $data = array(
            't_surat_masuk_data' => $t_surat_masuk
        );

        $this->load->view('menu/s_msk/t_surat_masuk_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_surat_masuk_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_srt_msk' => $row->id_srt_msk,
        'no_srt'     => $row->no_srt, 
		'tgl_surat' => $row->tgl_surat,
		'surat_dari' => $row->surat_dari,
		'tgl_terima' => $row->tgl_terima,
		'perihal' => $row->perihal,
		'ket' => $row->ket,
	    );
            $this->load->view('menu/s_msk/t_surat_masuk_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_masuk'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_surat_masuk/create_action'),
	    'id_srt_msk' => set_value('id_srt_msk'),
        'no_srt' => set_value('no_srt'),
	    'tgl_surat' => set_value('tgl_surat'),
	    'surat_dari' => set_value('surat_dari'),
	    'tgl_terima' => set_value('tgl_terima'),
	    'perihal' => set_value('perihal'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('menu/s_msk/t_surat_masuk_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'no_srt' => $this->input->post('no_srt',TRUE),
		'tgl_surat' => $this->input->post('tgl_surat',TRUE),
		'surat_dari' => $this->input->post('surat_dari',TRUE),
		'tgl_terima' => $this->input->post('tgl_terima',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_surat_masuk_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_surat_masuk'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_surat_masuk_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_surat_masuk/update_action'),
		'id_srt_msk' => set_value('id_srt_msk', $row->id_srt_msk),
        'no_srt' => set_value('no_srt', $row->no_srt),
		'tgl_surat' => set_value('tgl_surat', $row->tgl_surat),
		'surat_dari' => set_value('surat_dari', $row->surat_dari),
		'tgl_terima' => set_value('tgl_terima', $row->tgl_terima),
		'perihal' => set_value('perihal', $row->perihal),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('menu/s_msk/t_surat_masuk_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_masuk'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_srt_msk', TRUE));
        } else {
            $data = array(
                'no_srt' => $this->input->post('no_srt',TRUE),
		'tgl_surat' => $this->input->post('tgl_surat',TRUE),
		'surat_dari' => $this->input->post('surat_dari',TRUE),
		'tgl_terima' => $this->input->post('tgl_terima',TRUE),
		'perihal' => $this->input->post('perihal',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_surat_masuk_model->update($this->input->post('id_srt_msk', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_surat_masuk'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_surat_masuk_model->get_by_id($id);

        if ($row) {
            $this->T_surat_masuk_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_surat_masuk'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_surat_masuk'));
        }
    }

    public function _rules() 
    {
    $this->form_validation->set_rules('no_srt', 'no_srt', 'trim|required');
	$this->form_validation->set_rules('tgl_surat', 'tgl surat', 'trim|required');
	$this->form_validation->set_rules('surat_dari', 'surat dari', 'trim|required');
	$this->form_validation->set_rules('tgl_terima', 'tgl terima', 'trim|required');
	$this->form_validation->set_rules('perihal', 'perihal', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_srt_msk', 'id_srt_msk', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_surat_masuk.xls";
        $judul = "t_surat_masuk";
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
    xlsWriteLabel($tablehead, $kolomhead++, "No Srt");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Surat");
	xlsWriteLabel($tablehead, $kolomhead++, "Surat Dari");
	xlsWriteLabel($tablehead, $kolomhead++, "Tgl Terima");
	xlsWriteLabel($tablehead, $kolomhead++, "Perihal");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");

	foreach ($this->T_surat_masuk_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_surat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->surat_dari);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl_terima);
	    xlsWriteLabel($tablebody, $kolombody++, $data->perihal);
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
        header("Content-Disposition: attachment;Filename=t_surat_masuk.doc");

        $data = array(
            't_surat_masuk_data' => $this->T_surat_masuk_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/s_msk/t_surat_masuk_doc',$data);
    }

}

/* End of file T_surat_masuk.php */
/* Location: ./application/controllers/T_surat_masuk.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:26 */
/* http://harviacode.com */