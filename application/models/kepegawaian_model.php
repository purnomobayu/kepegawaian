<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_model extends CI_Model {

	public function insert($data,$tabel)
	{
		return ($this->db->insert($tabel, $data)) ? TRUE : FALSE;
	}

	public function get_multi($where,$tabel)
	{
		if (!empty($where)) {
			$this->db->where($where);
		}
		$data = $this->db->get($tabel)->result();
		// echo $this->db->last_query();die();
		return (count($data) > 0 ) ? $data : false;
	}

	public function get_one($where,$tabel)
	{
		if (!empty($where)) {
			$this->db->where($where);
		}

		$data = $this->db->get($tabel);
		// echo $this->db->last_query();die();
		return (count($data->result()) > 0 ) ? $data->row() : false;
	}

	public function update($data,$where,$tabel)
	{
		$this->db->where($where);
		$update = $this->db->update($tabel, $data);
		// echo $this->db->last_query();die();
		return ($update) ? true : false;
	}

}

/* End of file kepegawaian_model.php */
/* Location: ./application/models/kepegawaian_model.php */