<!-- Footer-->
<div class="card-footer text-muted">
  <h6>Proses Load <strong>{elapsed_time}</strong> detik</h6>
</div>
<!-- Bootstrap core JS-->
<script src="<?= base_url() ?>assets/landingpage/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/landingpage/js/scripts.js"></script>
<script src="<?= base_url() ?>assets/landingpage/sb-forms-latest.js"></script>

<!-- datatable -->
<script src="<?= base_url() ?>assets/jquery/jquery.min.js"></script>
<!-- <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- datatable -->
<script src="<?= base_url() ?>assets/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>assets/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>assets/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>assets/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": ["copy", "", "", "", "", ""]

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
