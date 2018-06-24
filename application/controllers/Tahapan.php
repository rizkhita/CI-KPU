<?php
class Tahapan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		
	}
	public function index(){
		$data['tahapan']=$this->m_data->get_all_tahapan()->result();
		$this->load->view('tahapan',$data);
	}
	public function ke_tahapan_tambah(){
		$this->load->view('tahapan_tambah');
	}
	public function ke_tahapan_edit($id){
		$data['tahapan']=$this->m_data->get_tahapan($id)->result();
		$this->load->view('tahapan_edit',$data);
	}

	public function tahapan_tambah(){
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data = array(
			'nama_kegiatan' => $nama_kegiatan,
			'tgl_awal'	 => $tgl_awal,
			'tgl_akhir' => $tgl_akhir 
		);
		$this->m_data->insert_tahapan($data);
		redirect('Tahapan/index');
	}

	public function tahapan_edit(){
		$id = $this->input->post('id');
		$nama_kegiatan = $this->input->post('nama_kegiatan');
		$tgl_awal = $this->input->post('tgl_awal');
		$tgl_akhir = $this->input->post('tgl_akhir');
		$data = array(
			'nama_kegiatan' => $nama_kegiatan,
			'tgl_awal'	 => $tgl_awal,
			'tgl_akhir' => $tgl_akhir 
		);
		$this->m_data->update_tahapan($id,$data);
		redirect('Tahapan/index');
	}

	public function tahapan_hapus($id){
		$this->m_data->delete_tahapan($id);
		redirect('Tahapan/index');
	}


}
