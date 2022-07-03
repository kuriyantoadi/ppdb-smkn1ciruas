<div class="container">

  <?= $this->session->flashdata('msg') ?>

  <center style="margin: 30px">
    <h5>Pengumuman Hasil Seleksi Penerimaan Peserta Didik Baru</h5>
    <h5>SMK NEGERI 1 CIRUAS TAHUN 2022/2023</h5>
  </center>

  <table id="example1" class="table table-bordered table-striped" border="1">
    <thead>
      <tr>
        <th>
          <center>No
        </th>
        <th>
          <center>Nama Siswa
        </th>
        <th>
          <center>Asal Sekolah
        </th>
        <th>
          <center>Jurusan
        </th>
        <th>
          <center>Hasil
        </th>
        <th>
          <center>Detail
        </th>
      </tr>
    </thead>
    <tbody>

      <?php
      $no = 1;
      foreach ($tampil as $row) {
      ?>
        <tr>
          <td>
            <center><?= $no++ ?>
          </td>
          <td>
            <center><?= $row->nama_siswa ?>
          </td>
          <td>
            <center><?= $row->asal_sekolah ?>
          </td>
          <td>
            <center><?= $row->jurusan ?>
          </td>
          <td>
            <center><?= $row->hasil ?>
          </td>
          <td>
            <a href="<?= site_url('Home/data_diterima_detail/' . $row->id_lulus) ?>" class="btn btn-primary btn-sm">Detail</a>

          </td>

        </tr>
      <?php } ?>
    </tbody>

  </table>

</div>