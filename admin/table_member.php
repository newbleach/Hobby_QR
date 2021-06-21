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
                    <?php
                            $query = "SELECT * FROM tbl_owner as n
                            INNER JOIN tbl_dog as d ON d.Ref_OwnerID = n.OwnerID" or die("Error:" . mysqli_error());
                            $result = mysqli_query($condb, $query); 
                                echo "<table  id='example1' class='table table-bordered table-striped'>";
                                    echo "
                                        <thead>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>รหัส</th>
                                            <th>ชื่อสัตว์เลี้ยง</th>
                                            <th>รูปสัตว์เลี้ยง</th>
                                            <th>ชื่อเจ้าของ</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </thead>
                                    ";
                                    $item = 0;
                                    while($row = mysqli_fetch_array($result)) { 
                                        $item +=1;
                                        echo "<tr>";
                                        echo "<td align='center'>".$item.'.'. "</td>";
                                        echo "<td align='center'>" .'OWN'.$row["DogID"] . "</td> "; 
                                        echo "<td>" .$row["DogName"] . "</td> "; 
                                        echo "<td align='center'>"."<img class='table-avatar' width='300px' alt='image' src='../member/image/profile/".$row['DogPhoto']."'>"."</td>";
                                        echo "<td>" .$row["FirstName"] .' '.$row["LastName"] . "</td> "; 
                                        echo "<td align='center'>" .$row["Telephone"] . "</td> "; 
                                        echo "<td class='project-actions text-center'>
                                        <a href='read_board.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-eye'>
                                        </i></a>
                                        <a href='update_pro_dtag.php?ID=$row[0]' class='btn btn-info btn-sm'> <i class='fas fa-pencil-alt'>
                                        </i></a>
                                        </td> ";
                                    }
                                    echo "
                                        <tfoot>
                                            <tr align='center'>
                                            <th>ลำดับ</th>
                                            <th>รหัส</th>
                                            <th>ชื่อสัตว์เลี้ยง</th>
                                            <th>รูปสัตว์เลี้ยง</th>
                                            <th>ชื่อเจ้าของ</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>จัดการ</th>
                                            </tr>
                                        </tfoot>
                                    ";
                                echo "</table>";
                            mysqli_close($condb);
                        ?>
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