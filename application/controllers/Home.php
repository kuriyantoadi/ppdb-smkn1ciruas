<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('M_home');
	}

	public function index()
	{
		$this->load->view('header');
    $this->load->view('home');
		$this->load->view('footer');
  }

	public function daftar_tpm()
	{
		$this->load->view('header');
    $this->load->view('daftar-tpm');
		$this->load->view('footer');
  }

	public function daftar_siswa_up()
	{
		$kompetensi_1 = $this->input->post('kompetensi_1');
		$kompetensi_2 = $this->input->post('kompetensi_2');
		$nama_siswa = $this->input->post('nama_siswa');
		$nisn_siswa = $this->input->post('nisn_siswa');
		$asal_sekolah = $this->input->post('asal_sekolah');
		$nik_siswa = $this->input->post('nik_siswa');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');

		$cek_nisn = $this->M_home->val_nisn($nisn_siswa);

		foreach ($cek_nisn as $row)
		{
			$cek_nisn_val = $row->nisn_siswa;
		}

		if ($cek_nisn_val) {
			echo "maaf data anda sudah terdaftar";
			exit;
		}

		$data_tambah = array(
			'kompetensi_1' => $kompetensi_1,
			'kompetensi_2' => $kompetensi_2,
			'nama_siswa' => $nama_siswa,
			'nisn_siswa' => $nisn_siswa,
			'asal_sekolah' => $asal_sekolah,
			'nik_siswa' => $nik_siswa,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'status' => 'Terdaftar'
		);

		$this->M_home->daftar_siswa_up($data_tambah);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-info alert-dismissible fade show" role="alert">
							<strong>Pendaftaran siswa berhasil</strong>
						</div>');
		redirect ('Home/jumlah_pendaftar');
	}

	public function jumlah_pendaftar()
	{
			$data['tampil'] = $this->M_home->jumlah_pendaftar();

			$this->load->view('header');
			$this->load->view('jumlah_pendaftar', $data);
			$this->load->view('footer');
	}

	public function daftar()
	{
    $this->load->view('daftar');
  }



}
