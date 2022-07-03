<div class="container">

  <?= $this->session->flashdata('msg') ?>

  <center style="margin: 30px">
    <h5>Pengumuman Hasil Seleksi Penerimaan Peserta Didik Baru</h5>
    <h5>SMK NEGERI 1 CIRUAS TAHUN 2022/2023</h5>
  </center>

  <table id="example1" class="table table-bordered table-striped" border="1">
    <?php foreach ($tampil as $row) { ?>

      <tr>
        <th>
          Nama Siswa
        </th>
        <th>
          <?= $row->nama_siswa ?>
        </th>
      </tr>
      <tr>
        <th>
          NISN
        </th>
        <th>: <?= $row->nisn ?>
        </th>
      </tr>
      <tr>
        <th>Asal Sekolah</th>
        <th>: <?= $row->asal_sekolah ?>
        </th>
      </tr>
      <tr>
        <th>Jurusan</th>
        <th>: <?= $row->jurusan ?></th>
      </tr>
      <tr>
        <th>Uji Kompetensi</th>
        <th>: <?= $row->uji_kom ?>
        </th>
      </tr>
      <tr>
        <th>SKL</th>
        <th>: <?= $row->skl ?></th>
      </tr>
      <tr>
        <th>Tes Fisik</th>
        <th>: <?= $row->test_fisik ?>
        </th>
      </tr>
      <tr>
        <th>Nilai Akhir</th>
        <th>: <?= $row->nilai_akhir ?></th>
      </tr>
      <tr>
        <th>Hasil</th>
        <th>: <?= $row->hasil ?></th>
      </tr>

    <?php } ?>
  </table>
  <center style="margin:30px ;">
    <a href="<?= site_url('Home/data_diterima') ?>" class="btn btn-warning btn-sm">Kembali</a>
  </center>

</div>