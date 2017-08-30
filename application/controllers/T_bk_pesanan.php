<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_bk_pesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_bk_pesanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_bk_pesanan = $this->T_bk_pesanan_model->get_all();

        $data = array(
            't_bk_pesanan_data' => $t_bk_pesanan
        );

        $this->load->view('menu/bk_pesanan/t_bk_pesanan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_bk_pesanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pesanan' => $row->id_pesanan,
		'tgl' => $row->tgl,
		'brg_dipesan' => $row->brg_dipesan,
		'rekanan' => $row->rekanan,
		'petunjuk_no' => $row->petunjuk_no,
	    );
            $this->load->view('menu/bk_pesanan/t_bk_pesanan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_pesanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_bk_pesanan/create_action'),
	    'id_pesanan' => set_value('id_pesanan'),
	    'tgl' => set_value('tgl'),
	    'brg_dipesan' => set_value('brg_dipesan'),
	    'rekanan' => set_value('rekanan'),
	    'petunjuk_no' => set_value('petunjuk_no'),
	);
        $this->load->view('menu/bk_pesanan/t_bk_pesanan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_dipesan' => $this->input->post('brg_dipesan',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_bk_pesanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_bk_pesanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_bk_pesanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_bk_pesanan/update_action'),
		'id_pesanan' => set_value('id_pesanan', $row->id_pesanan),
		'tgl' => set_value('tgl', $row->tgl),
		'brg_dipesan' => set_value('brg_dipesan', $row->brg_dipesan),
		'rekanan' => set_value('rekanan', $row->rekanan),
		'petunjuk_no' => set_value('petunjuk_no', $row->petunjuk_no),
	    );
            $this->load->view('menu/bk_pesanan/t_bk_pesanan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_pesanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pesanan', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_dipesan' => $this->input->post('brg_dipesan',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'petunjuk_no' => $this->input->post('petunjuk_no',TRUE),
	    );

            $this->T_bk_pesanan_model->update($this->input->post('id_pesanan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_bk_pesanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_bk_pesanan_model->get_by_id($id);

        if ($row) {
            $this->T_bk_pesanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_bk_pesanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_pesanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('brg_dipesan', 'brg dipesan', 'trim|required');
	$this->form_validation->set_rules('rekanan', 'rekanan', 'trim|required');
	$this->form_validation->set_rules('petunjuk_no', 'petunjuk no', 'trim|required');

	$this->form_validation->set_rules('id_pesanan', 'id_pesanan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_bk_pesanan.xls";
        $judul = "t_bk_pesanan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Brg Dipesan");
	xlsWriteLabel($tablehead, $kolomhead++, "Rekanan");
	xlsWriteLabel($tablehead, $kolomhead++, "Petunjuk No");

	foreach ($this->T_bk_pesanan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->brg_dipesan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->rekanan);
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
        header("Content-Disposition: attachment;Filename=t_bk_pesanan.doc");

        $data = array(
            't_bk_pesanan_data' => $this->T_bk_pesanan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/bk_pesanan/t_bk_pesanan_doc',$data);
    }

}

/* End of file T_bk_pesanan.php */
/* Location: ./application/controllers/T_bk_pesanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:53:11 */
/* http://harviacode.com */