<?php
class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function login_action(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$data = $this->m_data->get_login_data($username, $password);
		$count = count($data);
		if($count > 0){
			redirect('Home/index');
		}else{
			echo "password/username salah";
		}
	}
}
