<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_bk_penerimaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('T_bk_penerimaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $t_bk_penerimaan = $this->T_bk_penerimaan_model->get_all();

        $data = array(
            't_bk_penerimaan_data' => $t_bk_penerimaan
        );

        $this->load->view('menu/bk_penerimaan/t_bk_penerimaan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->T_bk_penerimaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_bk_penerimaan' => $row->id_bk_penerimaan,
		'tgl' => $row->tgl,
		'brg_yg_dikirim' => $row->brg_yg_dikirim,
		'no_spk_pesanan' => $row->no_spk_pesanan,
		'no_berita' => $row->no_berita,
		'rekanan' => $row->rekanan,
		'ket' => $row->ket,
	    );
            $this->load->view('menu/bk_penerimaan/t_bk_penerimaan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_penerimaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_bk_penerimaan/create_action'),
	    'id_bk_penerimaan' => set_value('id_bk_penerimaan'),
	    'tgl' => set_value('tgl'),
	    'brg_yg_dikirim' => set_value('brg_yg_dikirim'),
	    'no_spk_pesanan' => set_value('no_spk_pesanan'),
	    'no_berita' => set_value('no_berita'),
	    'rekanan' => set_value('rekanan'),
	    'ket' => set_value('ket'),
	);
        $this->load->view('menu/bk_penerimaan/t_bk_penerimaan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_yg_dikirim' => $this->input->post('brg_yg_dikirim',TRUE),
		'no_spk_pesanan' => $this->input->post('no_spk_pesanan',TRUE),
		'no_berita' => $this->input->post('no_berita',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_bk_penerimaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('t_bk_penerimaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->T_bk_penerimaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_bk_penerimaan/update_action'),
		'id_bk_penerimaan' => set_value('id_bk_penerimaan', $row->id_bk_penerimaan),
		'tgl' => set_value('tgl', $row->tgl),
		'brg_yg_dikirim' => set_value('brg_yg_dikirim', $row->brg_yg_dikirim),
		'no_spk_pesanan' => set_value('no_spk_pesanan', $row->no_spk_pesanan),
		'no_berita' => set_value('no_berita', $row->no_berita),
		'rekanan' => set_value('rekanan', $row->rekanan),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->load->view('menu/bk_penerimaan/t_bk_penerimaan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_penerimaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_bk_penerimaan', TRUE));
        } else {
            $data = array(
		'tgl' => $this->input->post('tgl',TRUE),
		'brg_yg_dikirim' => $this->input->post('brg_yg_dikirim',TRUE),
		'no_spk_pesanan' => $this->input->post('no_spk_pesanan',TRUE),
		'no_berita' => $this->input->post('no_berita',TRUE),
		'rekanan' => $this->input->post('rekanan',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->T_bk_penerimaan_model->update($this->input->post('id_bk_penerimaan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('t_bk_penerimaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->T_bk_penerimaan_model->get_by_id($id);

        if ($row) {
            $this->T_bk_penerimaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('t_bk_penerimaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('t_bk_penerimaan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('brg_yg_dikirim', 'brg yg dikirim', 'trim|required');
	$this->form_validation->set_rules('no_spk_pesanan', 'no spk pesanan', 'trim|required');
	$this->form_validation->set_rules('no_berita', 'no berita', 'trim|required');
	$this->form_validation->set_rules('rekanan', 'rekanan', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_bk_penerimaan', 'id_bk_penerimaan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "t_bk_penerimaan.xls";
        $judul = "t_bk_penerimaan";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Brg Yg Dikirim");
	xlsWriteLabel($tablehead, $kolomhead++, "No Spk Pesanan");
	xlsWriteLabel($tablehead, $kolomhead++, "No Berita");
	xlsWriteLabel($tablehead, $kolomhead++, "Rekanan");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");

	foreach ($this->T_bk_penerimaan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tgl);
	    xlsWriteLabel($tablebody, $kolombody++, $data->brg_yg_dikirim);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_spk_pesanan);
	    xlsWriteNumber($tablebody, $kolombody++, $data->no_berita);
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
        header("Content-Disposition: attachment;Filename=t_bk_penerimaan.doc");

        $data = array(
            't_bk_penerimaan_data' => $this->T_bk_penerimaan_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('menu/bk_penerimaan/t_bk_penerimaan_doc',$data);
    }

}

/* End of file T_bk_penerimaan.php */
/* Location: ./application/controllers/T_bk_penerimaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 15:24:02 */
/* http://harviacode.com */