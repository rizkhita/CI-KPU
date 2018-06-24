<?php
class TPS extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index(){
		$data['tps']=$this->m_data->get_all_tps()->result();
		$this->load->view('tps',$data);
	}
	public function ke_tps_tambah(){
		$this->load->view('tps_tambah');
	}
	public function ke_tps_edit($id){
		$data['tps']=$this->m_data->get_tps($id)->result();
		$this->load->view('tps_edit',$data);
	}

	public function tps_tambah(){
		$nama_pos = $this->input->post('nama_pos');
		$nomor_pos = $this->input->post('nomor_pos');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_pos' => $nama_pos,
			'nomor_pos'	 => $nomor_pos,
			'alamat' => $alamat 
		);
		$this->m_data->insert_tps($data);
		redirect('TPS/index');
	}

	public function tps_edit(){
		$id = $this->input->post('id');
		$nama_pos = $this->input->post('nama_pos');
		$nomor_pos = $this->input->post('nomor_pos');
		$alamat = $this->input->post('alamat');
		$data = array(
			'nama_pos' => $nama_pos,
			'nomor_pos'	 => $nomor_pos,
			'alamat' => $alamat 
		);
		$this->m_data->update_tps($id,$data);
		redirect('TPS/index');
	}

	public function tps_hapus($id){
		$this->m_data->delete_tps($id);
		redirect('TPS/index');
	}
}
