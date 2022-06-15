      <!-- Icons Grid-->

        <div class="container">

          <div style="margin: 30px" class="card card-primary">
            <div class="card-header">
              <h5 class="card-title">Halaman Pendaftaran Peserta Didik Baru</h5>
            </div>

            <?= form_open('Home/daftar_siswa_up'); ?>
              <div class="card-body">
                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">Kompetensi Keahlian Pilihan 1</label>
                  <select class="form-control" name="kompetensi_1" required>
                    <option value="">Pilih</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                    <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                    <option value="Teknik Grafika">Teknik Grafika</option>
                    <option value="Akuntansi Keuangan Lembaga">Akuntansi Keuangan Lembaga</option>
                    <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>

                  </select>
                </div>
                <div class="form-group mt-3">

                  <label for="exampleInputEmail1">Kompetensi Keahlian Pilihan 2 </label>
                  <select class="form-control" name="kompetensi_2" required>
                    <option value="">Pilih</option>
                    <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                    <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                    <option value="Teknik Grafika">Teknik Grafika</option>
                    <option value="Akuntansi Keuangan Lembaga">Akuntansi Keuangan Lembaga</option>
                    <option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
                  </select>
                  <p>Jika hanya ingin memilih hanya 1 komptensi keahlian saja, pilihan kompetensi 1 dan kompetensi 2 sama</h>
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">Nama Siswa</label>
                  <input type="text" class="form-control" name="nama_siswa" id="exampleInputEmail1" placeholder="Nama Lengkap">
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" class="form-control" name="nisn_siswa" id="exampleInputEmail1" placeholder="NISN Siswa">
                </div>

                <div class="form-groupmt-3">
                  <label for="exampleInputEmail1">Asal Sekolah</label>
                  <input type="text" class="form-control" name="asal_sekolah" id="exampleInputEmail1" placeholder="Asal Sekolah">
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">NIK Siswa</label>
                  <input type="text" class="form-control" name="nik_siswa" id="exampleInputEmail1" placeholder="NIK">
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">Tanggal Lahir (Bulan/Tgl/Tahun)</label>
                  <input type="date" class="form-control" name="tgl_lahir"  id="exampleInputEmail1" placeholder="Nama Lengkap">
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">Alamat Siswa</label>
                  <input type="text" class="form-control" name="alamat" id="exampleInputEmail1" placeholder="NIK Siswa">
                </div>

                <div class="form-group mt-3">
                  <label for="exampleInputEmail1">Nomor HP</label>
                  <input type="text" class="form-control" name="no_hp" id="exampleInputEmail1" placeholder="Nomor HP">
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer"><center>
                <input class="btn btn-primary btn-sm" type="submit" name="" value="submit">
              </div>
              <?= form_close(); ?>
          </div>
        </div>
