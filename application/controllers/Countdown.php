<?php
class Countdown extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index(){
		$data['countdown']=$this->m_data->get_all_count()->result();
		$this->load->view('count',$data);
	}

	public function ke_count_tambah(){
		$this->load->view('count_tambah');
	}
	public function count_tambah(){
		$count_awal = $this->input->post('count_awal');
		$count_akhir = $this->input->post('count_akhir');
		$keterangan = $this->input->post('keterangan');
		$data = array(
				'count_awal' => $count_awal,
				'count_akhir' => $count_akhir,
				'keterangan'=> $keterangan
			);
		$this->m_data->insert_count($data);
		redirect('Countdown/index');
	}
	public function ke_count_edit($id){
		$data['countdown']=$this->m_data->get_count($id)->result();
		$this->load->view('count_edit',$data);	
	}
	public function count_edit(){
		$id = $this->input->post('id');
		$count_awal = $this->input->post('count_awal');
		$count_akhir = $this->input->post('count_akhir');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'count_awal' => $count_awal,
			'count_akhir' => $count_akhir,
			'keterangan'=> $keterangan
		);
		$this->m_data->update_count($id,$data);
		redirect('Countdown/index');
	}
	public function count_hapus($id){
		$this->m_data->delete_count($id);
		redirect('Countdown/index');
	}

}
