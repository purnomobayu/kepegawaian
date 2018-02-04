<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepegawaian_controller extends CI_Controller {

	public function template($title = '', $page = 'beranda', $params = NULL)
	{
		$data = [ 'title' => $title , 'page' => $page , $params ];
		$this->load->view('template', $data);
	}

	public function index()
	{
		$this->template('Beranda','beranda',NULL);
	}

}

/* End of file kepegawaian_controller.php */
/* Location: ./application/controllers/kepegawaian_controller.php */