
<?php
class M_upload extends CI_Model{
 
    function simpan_upload($data){
        // $data = array(
        // 		'tanggal' =>$tanggal,
        //         'judul' => $judul,
        //         'isi' => $isi,
        //         'foto' => $image
        //     );  
        $this->db->insert('berita',$data);
    }
 }