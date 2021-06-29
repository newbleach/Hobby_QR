<?php
    include './include_menu_dtag.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">แก้ไขรหัสผ่าน</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        
        <div class="row">
        <div class="col-lg-3">
          </div>
          <!-- /.col-md-2 -->
        <div class="col-lg-6">
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">แก้ไขรหัสผ่าน</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <form action="change_password_db.php" method="post" class="form-horizontal">
                        <div class="row">
                        <div class="col-sm-8">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ชื่อผู้ใช้</label>
                                    <input type="text" name="Username" required class="form-control" autocomplete="off" value="<?php echo $row['Username'];?>" disabled>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>รหัสผ่าน</label>
                                    <input type="password" name="Password1" required class="form-control" placeholder="ป้อน . . .">
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>ยืนยันรหัสผ่าน</label>
                                    <input type="password" name="Password2" required class="form-control" placeholder="ป้อน . . .">
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <input type="hidden" name="OwnerID" value="<?php echo $row['OwnerID'];?>">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="reset" class="btn btn-default">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-3">
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include './include_footer.php'
?>