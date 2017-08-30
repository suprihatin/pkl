<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_surat_masuk_model extends CI_Model
{

    public $table = 't_surat_masuk';
    public $id = 'id_srt_msk';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_srt_msk', $q);
	$this->db->or_like('no', $q);
    $this->db->or_like('n0_srt', $q);
	$this->db->or_like('tgl_surat', $q);
	$this->db->or_like('surat_dari', $q);
	$this->db->or_like('tgl_terima', $q);
	$this->db->or_like('perihal', $q);
	$this->db->or_like('ket', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_srt_msk', $q);
	$this->db->or_like('no', $q);
    $this->db->or_like('n0_srt', $q);
	$this->db->or_like('tgl_surat', $q);
	$this->db->or_like('surat_dari', $q);
	$this->db->or_like('tgl_terima', $q);
	$this->db->or_like('perihal', $q);
	$this->db->or_like('ket', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file T_surat_masuk_model.php */
/* Location: ./application/models/T_surat_masuk_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-08-09 14:52:58 */
/* http://harviacode.com */