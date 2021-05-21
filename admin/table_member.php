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
                    <h1 class="m-0 text-dark">ตารางข้อมูลสมาชิก</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#" style="color:green">หน้าแรก</a></li>
                        <li class="breadcrumb-item active">ตารางข้อมูลสมาชิก</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table  id='example1' class='table table-bordered table-striped projects'>
                                        <thead>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>รหัส</th>
                                            <th>ชื่อ-นามสกุล</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>ไลน์</th>
                                            <th>เฟสบุ๊ค</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                   <tr>
                                            <td>1</td>
                                            <td>M0001</td>
                                            <td>นาย หนึ่ง</td>
                                            <td>062155542</td>
                                            <td>one</td>
                                            <td>@one</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>2</td>
                                            <td>M0002</td>
                                            <td>นาย สอง</td>
                                            <td>062155542</td>
                                            <td>two</td>
                                            <td>@two</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>3</td>
                                            <td>M0003</td>
                                            <td>นาย สาม</td>
                                            <td>062155542</td>
                                            <td>three</td>
                                            <td>@three</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>4</td>
                                            <td>M0004</td>
                                            <td>นาย สี่</td>
                                            <td>062155542</td>
                                            <td>four</td>
                                            <td>@four</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            </td>
                                    </tr>
                                    <tr>
                                            <td>5</td>
                                            <td>M0005</td>
                                            <td>นาย ห้า</td>
                                            <td>062155542</td>
                                            <td>five</td>
                                            <td>@five</td>
                                            <td class='project-actions text-center'>
                                            <a href='read_board.php?ID=$row[0]' class='btn btn-primary btn-sm'> <i class='fas fa-eye'>
                                            </i></a>
                                            </td>
                                    </tr>
                                  
                                        
                               </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <br><br>
</div>
<!-- /.content-wrapper -->
<!-- page script -->
<script>
$(document).ready(function() {

    $('a[href^="./table_member.php"]').addClass('nav-item has-treeview menu-open nav-link active');

});
</script>