<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kepegawaian_model');
	}

	public function template($title = '', $page = 'beranda', $params = array())
	{
		$data = array_merge([ 'title' => $title , 'page' => $page ],$params);
		$this->load->view('template', $data);
	}

	public function index()
	{
		$data['pekerja'] = $this->Kepegawaian_model->get_multi("","pekerja");
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
					$ins = $this->Kepegawaian_model->insert($data,'pekerja');
					($ins) ? $this->session->set_flashdata('notif', 'sukses add') : $this->session->set_flashdata('notif', 'ggl add');
				} else {
					$this->session->set_flashdata('notif', validation_errors());
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
					$up = $this->Kepegawaian_model->update($data,['nik' => $this->uri->segment(5)], 'pekerja');
					($up) ? $this->session->set_flashdata('notif', 'sukses edit') : $this->session->set_flashdata('notif', ' sukses edit');
				} else {
					$this->session->set_flashdata('notif', validation_errors());
				}
				redirect('kepegawaian_controller','refresh');
			}
			else {
				$data['pekerja'] = $this->Kepegawaian_model->get_one(['nik' => $this->uri->segment(4)],"pekerja");
				$this->template('Tambah Data Pekerja','f_data_pekerja',$data);
			}
		}
		else {
			$data['pekerja'] = $this->Kepegawaian_model->get_multi("pekerja");
			$this->template('Data Pekerja','beranda',$data);
		}
	}

}

/* End of file kepegawaian_controller.php */
/* Location: ./application/controllers/kepegawaian_controller.php */