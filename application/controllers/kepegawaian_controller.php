<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kepegawaian_model');
	}

	public function template($title = '', $page = 'beranda', $params = array())
	{
		$data = array_merge([ 'title' => $title , 'page' => $page ],$params);
		$this->load->view('template', $data);
	}

	public function index()
	{
		$data['pekerja'] = $this->kepegawaian_model->get_multi("","pekerja");
		$this->template('Beranda','beranda', $data);
	}

	public function pekerja()
	{
		if ($this->uri->segment(3) == "add") {
			if ($this->uri->segment(4) == "proses") {
				$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
				$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
				$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$data = [
						'nik' => $this->input->post('nik',true),
						'nama' => $this->input->post('nama',true),
						'alamat' => $this->input->post('alamat',true),
						'tgl_lahir' => $this->input->post('tgl_lahir',true),
						'tgl_masuk' => $this->input->post('tgl_masuk',true)
					];
					$ins = $this->kepegawaian_model->insert($data,'pekerja');
					($ins) ? $this->session->set_flashdata('notif', '<h1>sukses add</h1>') : $this->session->set_flashdata('notif', '<h1>ggl add</h1>');
				} else {
					$this->session->set_flashdata('notif', "<h1>".validation_errors()."</h1>");
				}
				redirect('kepegawaian_controller','refresh');
			}
			else {
				$this->template('Tambah Data Pekerja','f_data_pekerja');
			}
		}
		elseif ($this->uri->segment(3) == "edit") {
			if ($this->uri->segment(4) == "proses") {
				$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
				$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
				$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
				$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
				$this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$data = [
						'nik' => $this->input->post('nik',true),
						'nama' => $this->input->post('nama',true),
						'alamat' => $this->input->post('alamat',true),
						'tgl_lahir' => $this->input->post('tgl_lahir',true),
						'tgl_masuk' => $this->input->post('tgl_masuk',true)
					];
					$up = $this->kepegawaian_model->update($data,['nik' => $this->uri->segment(5)], 'pekerja');
					($up) ? $this->session->set_flashdata('notif', '<h1>sukses edit</h1>') : $this->session->set_flashdata('notif', ' <h1>ggl edit</h1>');
				} else {
					$this->session->set_flashdata('notif', "<h1>".validation_errors()."</h1>");
				}
				redirect('kepegawaian_controller','refresh');
			}
			else {
				$data['pekerja'] = $this->kepegawaian_model->get_one(['nik' => $this->uri->segment(4)],"pekerja");
				$this->template('Tambah Data Pekerja','f_data_pekerja',$data);
			}
		}
		elseif ($this->uri->segment(3) == "delete") {
			$del = $this->kepegawaian_model->del(['nik' => $this->uri->segment(4)],"pekerja");
			($del) ? $this->session->set_flashdata('notif', '<h1>sukses hps</h1>') : $this->session->set_flashdata('notif', ' <h1>ggl hps</h1>');
			redirect('kepegawaian_controller','refresh');
		}
		else {
			$data['pekerja'] = $this->kepegawaian_model->get_multi("","pekerja");
			$this->template('Data Pekerja','beranda',$data);
		}
	}

	public function cuti()
	{
		if ($this->uri->segment(3) == "add") {
			if ($this->uri->segment(4) == "proses") {
				$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'trim|required');
				$this->form_validation->set_rules('lama_cuti', 'Lama Cuti', 'trim|required');
				$this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$data = [
						'nik' => $this->input->post('nik',true),
						'tgl_mulai' => $this->input->post('tgl_mulai',true),
						'lama_cuti' => $this->input->post('lama_cuti',true),
						'catatan' => $this->input->post('catatan',true),
					];
					$ins = $this->kepegawaian_model->insert($data,'cuti_pekerja');
					($ins) ? $this->session->set_flashdata('notif', '<h1>sukses add</h1>') : $this->session->set_flashdata('notif', '<h1>ggl add</h1>');
				} else {
					$this->session->set_flashdata('"<h1>".notif'."</h1>", validation_errors());
				}
				redirect('kepegawaian_controller/cuti','refresh');
			}
			else {
				$this->template('Tambah Data Cuti','f_cuti');
			}
		}
		elseif ($this->uri->segment(3) == "edit") {
			if ($this->uri->segment(4) == "proses") {
				$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
				$this->form_validation->set_rules('tgl_mulai', 'Tanggal Mulai', 'trim|required');
				$this->form_validation->set_rules('lama_cuti', 'Lama Cuti', 'trim|required');
				$this->form_validation->set_rules('catatan', 'Catatan', 'trim|required');
				if ($this->form_validation->run() == TRUE) {
					$data = [
						'nik' => $this->input->post('nik',true),
						'tgl_mulai' => $this->input->post('tgl_mulai',true),
						'lama_cuti' => $this->input->post('lama_cuti',true),
						'catatan' => $this->input->post('catatan',true),
					];
					$up = $this->kepegawaian_model->update($data,['nik' => $this->uri->segment(5)], 'cuti_pekerja');
					($up) ? $this->session->set_flashdata('notif', '<h1>sukses edit</h1>') : $this->session->set_flashdata('notif', ' <h1>ggl edit</h1>');
				} else {
					$this->session->set_flashdata('notif', "<h1>".validation_errors()."</h1>");
				}
				redirect('kepegawaian_controller/cuti','refresh');
			}
			else {
				$data['cuti'] = $this->kepegawaian_model->get_one(['nik' => $this->uri->segment(4)],"cuti_pekerja");
				$this->template('Edit Data Cuti','f_cuti',$data);
			}
		}
		elseif ($this->uri->segment(3) == "delete") {
			$del = $this->kepegawaian_model->del(['id' => $this->uri->segment(4)],"cuti_pekerja");
			($del) ? $this->session->set_flashdata('notif', '<h1>sukses hps</h1>') : $this->session->set_flashdata('notif', ' <h1>ggl hps</h1>');
			redirect('kepegawaian_controller/cuti','refresh');
		}
		else {
			$data['cuti'] = $this->kepegawaian_model->detail_cuti();
			$this->template('Data CUTI','v_data_cuti',$data);
		}
	}

}

/* End of file kepegawaian_controller.php */
/* Location: ./application/controllers/kepegawaian_controller.php */