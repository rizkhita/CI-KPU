<?php
class Berita extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_upload');
		
	}
	public function index(){
		$this->load->view('berita');
	}
	public function ke_berita_tambah(){
      	$this->load->view('berita_tambah');
    }
 
    public function do_upload(){
        $config['upload_path']="./assets/images";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
 
            $tanggal= $this->input->post('tanggal');
            $judul= $this->input->post('judul');
            $isi= $this->input->post('isi');
            $image= $data['upload_data']['file_name']; 
             
            $this->m_upload->simpan_upload($tanggal,$judul,$isi,$image);
            redirect('Berita/index');
        }
 
     }
 
}
