<?php
class Paslon extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index(){
		$data['paslon'] = $this->m_data->get_all_paslon()->result();
		$this->load->view('paslon', $data);
	}
}
