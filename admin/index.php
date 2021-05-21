<?php
include('./include_menu.php'); 
?>
<br><br>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ข้อมูลรายงานสรุป</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ข้อมูลรายงานสรุป</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>90</h3>
                            <p>จำนวนคิวอาร์โค้ด</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-qrcode"></i>
                        </div>
                        <a href="table_death.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>50</h3>

                            <p>จำนวนสมาชิก</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="table_suppurude.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>50</h3>
                            <!-- <sup style="font-size: 20px">%</sup> -->
                            <p>จำนวนสินค้า</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-tag"></i>
                        </div>
                        <a href="table_member.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>120</h3>
                            <p>จำนวนนามบัตร</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div>
                        <a href="table_house.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
              
                <!-- ./col -->
            </div>
        </div>
        <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->
<script>
$(document).ready(function() {

    $('a[href^="./index.php"]').addClass('nav-item has-treeview menu-open nav-link active');

});
</script>
<br><br>