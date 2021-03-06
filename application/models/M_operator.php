<?php

class M_operator extends CI_Model{

  function daftar_siswa(){
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $query = $this->db->get()->result();
    return $query;
  }

  function siswa_edit($id_siswa){
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->where('tb_siswa.id_siswa',$id_siswa);
    $query = $this->db->get()->result();
    return $query;
  }

  function siswa_edit_up($data_edit, $id_siswa){
    $this->db->where('id_siswa',$id_siswa);
    $this->db->update('tb_siswa',$data_edit);
  }

  public function print_x_akl($id_siswa)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_nilai_x_akl','tb_nilai_x_akl.id_siswa = tb_siswa.id_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
    $this->db->join('tb_admin','tb_kelas.id_kelas = tb_admin.id_kelas');
    $this->db->where('tb_siswa.id_siswa',$id_siswa);
    $query = $this->db->get()->result();
    return $query;
  }

  public function cek_jurusan($id_siswa)
  {
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
    $this->db->where('tb_siswa.id_siswa',$id_siswa);
    $query = $this->db->get()->result();
    return $query;
  }



  function dashboard_x_akl($ses_id){
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->join('tb_kelas','tb_siswa.id_kelas = tb_kelas.id_kelas');
    $this->db->where('tb_siswa.id_siswa',$ses_id);
    $query = $this->db->get()->result();
    return $query;
  }

  function dashboard_bismen($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

}

 ?>
