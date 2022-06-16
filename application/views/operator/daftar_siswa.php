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
          <th><center>No</th>
          <th><center>Nama Siswa</th>
          <th><center>Asal Sekolah</th>
          <th><center>Status Pendaftaran</th>
          <th><center>Pilihan</th>
        </tr>
        </thead>
        <tbody>

          <?php
          $no=1;
          foreach ($tampil as $row) {
          ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $row->nama_siswa ?></td>
          <td><?= $row->asal_sekolah ?></td>
          <td><?= $row->status ?></td>
          <td><center>
            <a href="<?= site_url('C_operator/siswa_hapus/'.$row->id_siswa); ?>" class="btn btn-sm btn-danger"
              onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')">Hapus</a>
            <a href="<?= site_url('C_operator/siswa_edit/'.$row->id_siswa); ?>" class="btn btn-sm btn-primary">Edit</a>
            <a href="<?= site_url('C_operator/siswa_edit/'.$row->id_siswa); ?>" class="btn btn-sm btn-info">Lihat</a>
          </td>

        </tr>
      <?php } ?>
        </tbody>

      </table>
    </div>
    <!-- /.card-body -->
  </div>
</div>
