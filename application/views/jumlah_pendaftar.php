<?php
session_start();
if ($_SESSION['status']!= "kaingeiD7OoYua4au0Qu") {
    header("location:https://smkn1ciruas.sch.id/");
}
?>


<div class="container">

  <?= $this->session->flashdata('msg') ?>

  <div class="card" style="margin: 30px">
    <div class="card-header">
      <h5 class="card-title">Data Pendaftar PPDB</h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped" border="1">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Asal Sekolah</th>
            <th>Status Pendaftaran</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $no = 1;
          foreach ($tampil as $row) {
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row->nama_siswa ?></td>
              <td><?= $row->asal_sekolah ?></td>
              <td><?= $row->status ?></td>

            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>