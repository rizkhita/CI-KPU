<?php
class Guests extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index()
	{
		$data['tes'] = $this->m_data->ambildata()->result();
		$this->load->view('guests.php',$data);
	}
	function hapus($id){
		$this->m_data->hapus_data($id);
		redirect('Guests/index');
	}
	function edit($no){
		$data['tes'] = $this->m_data->get_data($no);
		$this->load->view('edit',$data);
	}
	function update(){
	$NIM = $this->input->post('id');
	$username = $this->input->post('username');
	$angkatan = $this->input->post('angkatan');
	$data = array(
		'NIM' => $NIM,
		'username' => $username,
		'angkatan' => $angkatan 
	);
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'user');
	redirect('crud/index');
	}
}
