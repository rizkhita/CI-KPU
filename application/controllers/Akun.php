<?php
class Akun extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index(){
		$data['login']=$this->m_data->get_all_akun()->result();
		$this->load->view('akun',$data);
	}
	public function ke_akun_tambah(){
		$this->load->view('akun_tambah');
	}
	public function ke_akun_edit($id){
		$data['login']=$this->m_data->get_akun($id)->result();
		$this->load->view('akun_edit',$data);
	}

	public function akun_tambah(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'username'	 => $username,
			'password' => $password 
		);
		$this->m_data->insert_akun($data);
		redirect('Akun/index');
	}

	public function akun_edit(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama' => $nama,
			'username'	 => $username,
			'password' => $password 
		);
		$this->m_data->update_akun($id,$data);
		redirect('Akun/index');
	}

	public function akun_hapus($id){
		$this->m_data->delete_akun($id);
		redirect('Akun/index');
	}


}
