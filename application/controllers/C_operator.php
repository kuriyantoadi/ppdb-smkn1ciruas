<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_operator extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_operator');

			// session login
			if ($this->session->userdata('operator') != true) {
				$url = base_url('C_login/fa');
				redirect($url);
			}
	}

// halaman guru awal
public function index()
{
	$data['tampil'] = $this->M_operator->daftar_siswa();

	$this->load->view('operator/header');
	$this->load->view('operator/daftar_siswa',$data);
	$this->load->view('operator/footer');
}


public function dashboard()
{
	$this->load->view('operator/header');
	$this->load->view('operator/dashboard');
	$this->load->view('operator/footer');
}

public function daftar_siswa()
{
		$data['tampil'] = $this->M_operator->daftar_siswa();

		$this->load->view('operator/header');
		$this->load->view('operator/daftar_siswa', $data);
		$this->load->view('operator/footer');
}

	// public function walas_tambah()
	// {
	// 	$data['tampil_kelas'] = $this->M_admin->kelas_tampil();
	//
	// 	$this->load->view('template/header-admin');
	// 	$this->load->view('admin/walas_tambah',$data);
	// 	$this->load->view('template/footer-admin');
	// }
	//
	// public function walas_tambah_up()
	// {
	// 	$nama_guru = $this->input->post('nama_guru');
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$id_kelas = $this->input->post('id_kelas');
	//
	// 	$data_tambah = array(
	// 		'nama_guru' => $nama_guru,
	// 		'username' => $username,
	// 		'id_kelas' => $id_kelas,
	// 		'password' => sha1($password),
	// 	);
	//
	// 	$this->M_admin->walas_tambah_up($data_tambah);
	//
	// 	$this->session->set_flashdata('msg', '
	// 					<div class="alert alert-info alert-dismissible fade show" role="alert">
	// 						<strong>Edit data berhasil</strong>
	//
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>');
	// 	redirect ('C_admin');
	// }
	//
	// public function walas_edit($id_admin)
	// {
	// 	$data['tampil'] = $this->M_admin->walas_edit($id_admin);
	// 	$data['tampil_kelas'] = $this->M_admin->kelas_tampil();
	//
	// 	$this->load->view('template/header-admin');
	// 	$this->load->view('admin/walas_edit', $data);
	// 	$this->load->view('template/footer-admin');
	// }
	//
	// public function walas_edit_up()
	// {
	// 	$id_admin = $this->input->post('id_admin');
	// 	$nama_guru = $this->input->post('nama_guru');
	// 	$username = $this->input->post('username');
	// 	$id_kelas = $this->input->post('id_kelas');
	//
	// 	$data_edit = array(
	// 		'nama_guru' => $nama_guru,
	// 		'username' => $username,
	// 		'id_kelas' => $id_kelas
	// 	);
	//
	// 	$this->M_admin->walas_edit_up($data_edit, $id_admin);
	//
	// 	$this->session->set_flashdata('msg', '
	// 					<div class="alert alert-primary alert-dismissible fade show" role="alert">
	// 						<strong>Edit data berhasil</strong>
	//
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>');
	// 	redirect ('C_admin/walas_edit/'.$id_admin);
	// }
	//
	//
	// public function walas_hapus($id_admin)
	// {
	// 	$id_admin = array('id_admin' => $id_admin);
	//
	// 	$success = $this->M_admin->walas_hapus($id_admin);
	// 	$this->session->set_flashdata('msg', '
	// 					<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 						<strong>Hapus Data Berhasil</strong>
	//
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>');
	// 	redirect ('C_admin');
	// }
	//
	// public function walas_pass($id_admin)
	// {
	// 	$data['tampil'] = $this->M_admin->walas_edit($id_admin);
	//
	// 	$this->load->view('template/header-admin');
	// 	$this->load->view('admin/walas_pass', $data);
	// 	$this->load->view('template/footer-admin');
	// }
	//
	// public function walas_pass_up()
	// {
	// 	$id_admin = $this->input->post('id_admin');
	// 	$password = $this->input->post('password');
	//
	// 	$data_edit = array(
	// 		'password' => sha1($password),
	// 	);
	//
	// 	$this->M_admin->walas_edit_up($data_edit, $id_admin);
	//
	// 	$this->session->set_flashdata('msg', '
	// 					<div class="alert alert-warning alert-dismissible fade show" role="alert">
	// 						<strong>Edit data berhasil</strong>
	//
	// 						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 							<span aria-hidden="true">&times;</span>
	// 						</button>
	// 					</div>'
	// 				);
	// 	redirect ('C_admin');
	// }

	// halaman guru akhir

}
