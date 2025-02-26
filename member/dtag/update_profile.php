<?php
    include './include_menu_dtag.php'
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">แก้ไขข้อมูลส่วนตัว</h1>
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
        <div class="col-lg-6">
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">แก้ไขข้อมูลส่วนตัวเจ้าของ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
              <form class="form-horizontal">
                  <div class="form-group row">
                  <div class="col-sm-6">
                      <div class="form-group">
                                    <label>รหัสสมาชิก</label>
                                    <div class="input-group">
                                        <input type="text" name="OwnerID" class="form-control"
                                            value="<?php echo 'OWN'.$row['OwnerID'];?>" disabled>
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                                    <label>ชื่อผู้ใช้</label>
                                    <div class="input-group">
                                        <input type="text" name="Username" class="form-control"
                                            value="<?php echo $row['Username'];?>" disabled>
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>น้ำหนัก</label>
                        <input type="text" class="form-control" placeholder="ป้อนข้อมูล ...">
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
        <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">แก้ไขข้อมูลส่วนตัวสุนัข</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                  <div class="form-group row">
                  <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                                    <label>วันที่</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend" >
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <!-- <input type="date" name="birthday" class="form-control" required> -->
                                        <input type="date" name="birthday" class="form-control">
                                        <!-- <input class="input-medium" type="text" data-provide="datepicker" data-date-language="th-th"> -->
                                    </div>
                                </div>
                    </div>
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>น้ำหนัก</label>
                        <input type="text" class="form-control" placeholder="ป้อนข้อมูล ...">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        <!-- /.card-body -->
        </div>
        <!-- /.row -->
        <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-default">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include './include_footer.php'
?>

<?php 
include('./include_menu_dtag.php'); 
?>
<!-- Content Wrapper. Contains page content -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">แก้ไขข้อมูลส่วนตัว<h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:teal">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- general form elements disabled -->
            <div class="card">
                <div class="card-header">
                    <form role="form" action="update_profile_db.php" method="post" class="form-horizontal"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-3 col-form-label">รหัสสมาชิก</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ref_suppurude_id" class="form-control"
                                            value="<?php echo 'M'.$row['member_id'];?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <a class="float-right btn btn-dark btn-sm" href="./table_member_create.php">
                                    <i class="fas fa-th-list"></i>
                                    </i>
                                    ดูข้อมูล
                                </a> -->
                            </div>
                        </div>
                </div>
                <!-- /.card-header -->
                <!-- /.card-header -->
                <div class="card-body">
                <div class="col-sm-10">
                            ________ ภาพปัจจุบัน ________
                            <br>
                            <img src="../profileimg/dtag/<?php echo $DogPhoto;?>" width="200px">
                            <br>
                        </div><br>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>ชื่อผู้ใช้</label>
                                <input type="text" name="username_member" class="form-control"  value="<?php echo $row['username_member'];?>" disabled>
                            </div>
                        </div>
                        <!-- <div class="col-sm-3">
                            <div class="form-group">
                                <label>รหัสผ่าน</label>
                                <input type="password_member" name="password_member" class="form-control"
                                value="<?php echo $row['password_member'];?>" >
                            </div>
                        </div> -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputFile">รูปภาพ</label> (เลือกภาพใหม่)
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image_member" class="custom-file-input" 
                                            id="exampleInputFile"accept="image/*">
                                        <label class="custom-file-label" for="exampleInputFile">เลือกรูปภาพ</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">อัพโหลด</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="email" name="email_member" class="form-control"  value="<?php echo $row['email_member'];?>" >
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" name="telephone_member" class="form-control"  value="<?php echo $row['telephone_member'];?>" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>หมายเหตุเพิ่มเติม</label>
                                <textarea name="remark_member" class="form-control" rows="3"
                                    ><?php echo $row['remark_member'];?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="float-right">
                        <input type="hidden" name="image_member2" value="<?php echo $row['image_member'];?>">
                        <input type="hidden" name="member_id" value="<?php echo $row['member_id'];?>">
                        <button class="btn btn-info" type="submit">บันทึก</button>
                        <button class="btn btn-default" type="submit">ยกเลิก</button>
                        <!-- <button class="btn btn-default float-right" type="submit">Cancel</button> -->
                    </div>

                </div>
                </form>
                <!-- /.card-header -->
            </div>
            <!-- /.card -->
        </div>
</div>
<!-- /.card -->
</div><!-- /.container-fluid -->
<?php
    include './include_footer.php'
?>
