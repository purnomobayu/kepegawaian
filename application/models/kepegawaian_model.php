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

	public function cek_sisa_cuti($nik,$tgl_mulai,$lamacuti)
	{
		$this->db->select('nik,sum(lama_cuti) AS lmacuti, ( 12 - sum(lama_cuti)) AS sisa_cuti');
		$this->db->where('YEAR(tgl_mulai) = YEAR(NOW()) AND nik = "$nik"');

	}

		public function del($where,$tabel)
	{
		return ($this->db->where($where)->delete($tabel)) ? true : false ;
	}

	public function detail_cuti()
	{
		$this->db->join('cuti_pekerja', 'cuti_pekerja.nik = pekerja.nik');
		return $this->db->get('pekerja')->result();
	}


}

/* End of file kepegawaian_model.php */
/* Location: ./application/models/kepegawaian_model.php */