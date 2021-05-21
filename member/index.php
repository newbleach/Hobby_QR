<?php
    include './include_menu.php'
?>

<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ข้อมูลส่วนตัว</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ข้อมูลส่วนตัว</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">


        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-success">
                <h3 class="widget-user-username">Mat Asmat</h3>
                <h5 class="widget-user-desc">test</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../images/image_1.jpg" alt="User Avatar" width="300px">
            </div>
            <div class="card-footer">
            <div class="row">
                    <div class="col-sm-4 border-left">
                        <div>
                            <div class="card-header text-muted border-bottom-0">
                                <h2 class="text-muted text-lg"><b>ข้อมูลเจ้าของ</b></h2>
                            </div>
                            <h2 class="text-muted text-md"><b>ชื่อผู้ใช้: </b> aaaaaaaaaaaaa</h2>
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            aaaaaaaaaaaaa </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-phone-square-alt"></i></span>
                                    เบอร์โทรศัพท์: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-facebook-square"></i></i></span>
                                    เฟสบุ๊ค: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fab fa-line"></i></span>
                                    ไลน์: aaaaaaaaaaaaa</li>
                            </ul>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-left">
                        <div>
                            <div class="card-header text-muted border-bottom-0">
                                <h2 class="text-muted text-lg"><b>ข้อมูลสัตว์เลี้ยง</b></h2>
                            </div>
                            <h2 class="text-muted text-md"><b>ชื่อ-นามสกุล: </b>
                            aaaaaaaaaaaaa </h2>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="middle"><span class="fa-li"><i class="fas fa-birthday-cake"></i></i></span>
                                    วัน เดือน ปีเกิด: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    พันธุ์: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    เพศ: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    กรุ๊ปเลือด: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    สีตัว: aaaaaaaaaaaaa</li>
                                    <li class="middle"><span class="fa-li"><i class="fas fa-arrow-circle-right"></i></span>
                                    ลักษณะนิสัย: aaaaaaaaaaaaa</li>




                            </ul>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                    <div class="card-header text-muted border-bottom-0">
                                <h2 class="text-muted text-lg"><b>นามบัตรสัตว์เลี้ยง</b></h2>
                            </div>
                        <div class="description-block">
                            <img src="../images/template/Template Card-01.png" alt="" width="300px">
                            <img src="../images/template/Template Card-04.png" alt="" width="300px">
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
$(document).ready(function() {

    $('a[href^="./index.php"]').addClass('nav-item has-treeview menu-open nav-link active');

});
</script>

<br><br>