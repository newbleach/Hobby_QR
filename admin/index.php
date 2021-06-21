<?php
include('./include_menu.php'); 
$query = "
SELECT COUNT(QrCodeID) FROM tbl_qrcode" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query);

$query2 = "
SELECT COUNT(OwnerID) FROM tbl_owner"
or die("Error:" . mysqli_error());
$result2 = mysqli_query($condb, $query2);  
//echo $query;

$query3 = "
SELECT COUNT(ProductID) FROM tbl_products"
or die("Error:" . mysqli_error());
$result3 = mysqli_query($condb, $query3);  
//echo $query;

$query4 = "
SELECT COUNT(TemplateID) FROM tbl_templates"
or die("Error:" . mysqli_error());
$result4 = mysqli_query($condb, $query4);  
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
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $row['COUNT(QrCodeID)'];?></h3>

                            <p>จำนวนคิวอาร์โค้ด</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-qrcode"></i>
                        </div>
                        <a href="table_qrcode.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php } ?>
                <?php while($row = mysqli_fetch_array($result2)) { ?>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $row['COUNT(OwnerID)'];?></h3>

                            <p>จำนวนสมาชิก</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="table_suppurude.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php } ?>
                <!-- ./col -->
                <?php while($row = mysqli_fetch_array($result3)) { ?>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $row['COUNT(ProductID)'];?></h3>
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
                <?php } ?>
                <!-- ./col -->
                <?php while($row = mysqli_fetch_array($result4)) { ?>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $row['COUNT(TemplateID)'];?></h3>
                            <p>จำนวนนามบัตร</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div>
                        <a href="table_house.php" class="small-box-footer">ดูข้อมูล <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <?php } ?>
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