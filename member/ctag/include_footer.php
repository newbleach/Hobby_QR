  <!-- Main Footer -->
  <footer class="main-footer">
            <strong>ระบบ HobbyQR
                <a href="https://alphageek.co.th/" style="color:green">บริษัท อัลฟ่ากีค จำกัด</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>2021</b>
            </div>
        </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
 <!-- DataTables -->
 <script src="../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
</body>
</html>
<script type="text/javascript">
      function demo() {
        $('.datepicker').datepicker();
      }

      $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
    
        </script>
