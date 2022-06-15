<?php

class M_home extends CI_Model{

  function daftar_siswa_up($data_tambah)
  {
    $this->db->insert('tb_siswa',$data_tambah);
  }

  function jumlah_pendaftar(){
    $tampil = $this->db->get('tb_siswa')->result();
    return $tampil;
  }

  function val_nisn($nisn_siswa){
    $this->db->select('*');
    $this->db->from('tb_siswa');
    $this->db->where('tb_siswa.nisn_siswa',$nisn_siswa);
    $query = $this->db->get()->result();
    return $query;
  }
  // function kelas_tampil(){
  //   $tampil = $this->db->get('tb_kelas')->result();
  //   return $tampil;
  // }

}

 ?>
