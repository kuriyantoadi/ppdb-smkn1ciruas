<?php

class M_login extends CI_Model{

  //tampil buku
  function login_siswa($nisn_siswa, $password){
    $login = $this->db->query("SELECT * from tb_siswa where nisn_siswa='$nisn_siswa' AND password=sha1('$password') ");
    return $login;
  }

  function login_operator($username, $password){
    $login = $this->db->query("SELECT * from tb_operator where username='$username' AND password=sha1('$password') ");
    return $login;
  }


}

 ?>
