<?php
class M_data extends CI_Model {
	//login
	public function ambildata()
	{
		//$this->load->view('welcome_message');
		return $this->db->get('login');
	}

	//login table
	function get_login_data($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('login');
		return $query->result();
	}
	//crud paslon
	function get_all_paslon(){
		return $this->db->get('paslon');
	}
	function get_paslon($id){
		$this->db->where('ID', $id);
		return $this->db->get('login');
	}


	//CRUD tahapan
	//insert tahapan
	function insert_tahapan($data){
		$this->db->insert('tahapan', $data);
	//tampil		
	}
	function get_all_tahapan(){
		return $this->db->get('tahapan');
	}
	//untuk get data yg diedit
	function get_tahapan($id){
		$this->db->where('id',$id);
		return $this->db->get('tahapan');
	}
	//untuk edit
	function update_tahapan($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tahapan',$data);
	}
	//untuk delete
	function delete_tahapan($id){
		$this->db->where('id', $id);
		$this->db->delete('tahapan');
	}

	//CRUD countdown
	//insert count
	function insert_count($data){
		$this->db->insert('countdown',$data);
	}
	//tampil
	function get_all_count(){
	return $this->db->get('countdown');
	}
	//untuk get yang diedit
	function get_count($id){
		$this->db->where('id',$id);
		return $this->db->get('countdown');
	}
	//untuk edit
	function update_count($id,$data){
		$this->db->where('id',$id);
		$this->db->update('countdown',$data);
	}
	//untuk hapus
	function delete_count($id){
		$this->db->where('id', $id);
		$this->db->delete('countdown');
	}

	//CRUD akun
	//insert akun
	function insert_akun($data){
		$this->db->insert('login',$data);
	}
	//tampil
	function get_all_akun(){
	return $this->db->get('login');
	}
	//untuk get yang diedit
	function get_akun($id){
		$this->db->where('id',$id);
		return $this->db->get('login');
	}
	//untuk edit
	function update_akun($id,$data){
		$this->db->where('id',$id);
		$this->db->update('login',$data);
	}
	//untuk hapus
	function delete_akun($id){
		$this->db->where('id', $id);
		$this->db->delete('login');
	}


	//CRUD tps
	//insert tps
	function insert_tps($data){
		$this->db->insert('tps',$data);
	}
	//tampil
	function get_all_tps(){
	return $this->db->get('tps');
	}
	//untuk get yang diedit
	function get_tps($id){
		$this->db->where('id',$id);
		return $this->db->get('tps');
	}
	//untuk edit
	function update_tps($id,$data){
		$this->db->where('id',$id);
		$this->db->update('tps',$data);
	}
	//untuk hapus
	function delete_tps($id){
		$this->db->where('id', $id);
		$this->db->delete('tps');
	}


}
