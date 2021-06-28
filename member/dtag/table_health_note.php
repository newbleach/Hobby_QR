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
            <h1 class="m-0 text-dark">ตารางข้อมูลสุขภาพทั่วไป</h1>
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
                <h3 class="card-title">เพิ่มข้อมูล</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-6">
                    <div class="form-group">
                        <label>ปัญหาสุขภาพประจำตัว</label>
                        <input type="text" class="form-control" placeholder="ป้อนข้อมูล ...">
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success">Save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-success card-outline">
                    <div class="card-header">
                <h5 class="card-title m-0">ตารางข้อมูล</h5>
              </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table  id='example1' class='table table-bordered table-striped projects'>
                                        <thead>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>ปัญหาสุขภาพประจำตัวและข้อมูลสุขภาพอื่นๆ</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                   <tr>
                                            <td>1</td>
                                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, pariatur.
                                            </td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                                    <tr>
                                            <td>2</td>
                                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, pariatur.
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                                    <tr>
                                            <td>3</td>
                                            <td> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto, pariatur.
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            <a href='update_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                            </i></a>
                                            <a href='delete_board_db.php?ID=$row[0]' onclick=\"return confirm('ยืนยันการลบ?')\" class='btn btn-danger btn-sm'> <i class='fas fa-trash'>
                                            </i></a></td>
                                    </tr>
                               </table>
                    </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
          
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
