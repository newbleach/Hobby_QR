
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>HobbyQR</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="js/test.js"></script>
    <!-- ============================================= -->
    <!-- (1) link-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- ============================================= -->
</head>

<!-- <body class="hold-transition layout-top-nav"> -->
<body class="hold-transition layout-top-nav  layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-green">
            <div class="container">
                <a href="index3.html" class="navbar-brand">
                    <img src="../images/qrcode.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">HobbyQR (Member)</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="./index.php" class="nav-link">หน้าแรก</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">ดูข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">อุปกรณ์ในการเลี้ยงสุนัข</a></li>
                                <li><a href="#" class="dropdown-item">ตารางการให้วัคซีนของสุนัข</a></li>
                                <li><a href="#" class="dropdown-item">ข้อมูลการทำหมันสุนัข</a></li>
                                <li><a href="#" class="dropdown-item">การสื่อสารกับสุนัข</a></li>
                                <li><a href="#" class="dropdown-item">กายวิภาคของสุนัข</a></li>

                                <li class="dropdown-divider"></li>

                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"
                                        class="dropdown-item dropdown-toggle">ข้อมูลสุนัขตามพันธุ์</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="table_pay_money.php" class="dropdown-item">ข้อมูลทั่วไปและลักษณะนิสัย</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="table_get_money.php" class="dropdown-item">บุคลิก</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="table_get_money.php" class="dropdown-item">ข้อมูลการดูแล</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="table_get_money.php" class="dropdown-item">ผู้เลี้ยงที่เหมาะ</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="table_get_money.php" class="dropdown-item">ภาวะปัญหาสุขภาพ</a>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="table_get_money.php" class="dropdown-item">ความต้องการด้านสารอาหาร</a>
                                        </li>


                                        <!-- <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false"
                                                class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3"
                                                class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li> -->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">จัดการข้อมูล</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="table_body_weight.php" class="dropdown-item">ตารางน้ำหนักสัตว์เลี้ยง</a></li>
                                <li><a href="table_vaccine.php" class="dropdown-item">ตารางประวัติการฉีดวัคซีน</a></li>
                                <li><a href="table_flea_treatments.php" class="dropdown-item">ตารางประวัติกำจัดเห็ดหมัด</a></li>
                                <li><a href="table_worming.php" class="dropdown-item">ตารางป้องกันพยาธิหนอนหัวใจ</a></li>
                                <li><a href="table_medicine.php" class="dropdown-item">ตารางยาอาหารเสริม</a></li>
                                <li><a href="table_visit.php" class="dropdown-item">ตารางพบคุณหมอ</a></li>
                                <li><a href="table_health_note.php" class="dropdown-item">ตารางสุขภาพทั่วไป</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" class="nav-link dropdown-toggle">หน้าหลัก</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="./profile.php" class="dropdown-item">ข้อมูลส่วนตัว</a></li>
                                <li><a href="update_profile.php" class="dropdown-item">แก้ไขข้อมูลส่วนตัว</a></li>
                                <li><a href="change_password.php" class="dropdown-item">แก้ไขรหัสผ่าน</a></li>
                            </ul>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="../logout.php" class="nav-link">ออกจากระบบ</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

      

        <!-- Main Footer -->
        <!-- ============================================= -->
        <!-- (4) footer-->
        <footer class="main-footer">
            <strong>ระบบ HobbyQR
                <a href="https://alphageek.co.th/" style="color:green">บริษัท อัลฟ่ากีค จำกัด</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
                <b>2021</b>
            </div>
        </footer>

        <!-- ============================================= -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

     <!-- jQuery -->
     <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- DataTables -->
    <script src="../plugins/datatables/jquery.dataTables.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script>
  $(function () {
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
</body>

</html>