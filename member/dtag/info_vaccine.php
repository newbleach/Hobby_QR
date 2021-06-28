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
            <h1 class="m-0 text-dark">ข้อมูลการฉีดวัคซีนสุนัข</h1>
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
      <div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>วัคซีน</th>
                      <th>เข็มหลัก (ลูกสุนัข)</th>
                      <th>เข็มหลัก (สุนัขโตเต็มวัย)</th>
                      <th>ฉีดกระตุ้น</th>
                      <th>คำแนะนำ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>ป้องกันโรคไข้หัดสุนัข</td>
                      <td>3 เข็ม อายุ 2-3-4 เดือน</td>
                      <td>2 เข็ม ระยะห่าง 3-4 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>แนะนำสำหรับสุนัขทุกช่วงวัย</td>
                    </tr>
                    <tr>
                      <td>ป้องกันโรคตับอักเสบ</td>
                      <td>3 เข็ม อายุ 2-3-4 เดือน</td>
                      <td>2 เข็ม ระยะห่าง 3-4 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>แนะนำสำหรับสุนัขทุกช่วงวัย</td>
                    </tr>
                    <tr>
                      <td>ป้องกันเชื้อ Parainfluenza</td>
                      <td>3 เข็ม อายุ 2-3-4 เดือน</td>
                      <td>2 เข็ม ระยะห่าง 3-4 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>แนะนำสำหรับสุนัขทุกช่วงวัย</td>
                    </tr>
                    <tr>
                      <td>ป้องกันเชื้อ Bordetella bronchiseptica</td>
                      <td>3 เข็ม อายุ 2-3-4 เดือน</td>
                      <td>2-3 เข็ม ระยะห่าง 3 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>แนะนำสำหรับสุนัขที่เลี้ยงในกรง</td>
                    </tr>
                    <tr>
                      <td>ป้องกันเชื้อพาร์โวไวรัส</td>
                      <td>3 เข็ม อายุ 2-3-4 เดือน</td>
                      <td>1 เข็ม</td>
                      <td>ทุกปี</td>
                      <td>แนะนำสำหรับสุนัขทุกช่วงวัย</td>
                    </tr>
                    <tr>
                      <td>ป้องกันโรคลายม์</td>
                      <td>2 เข็ม อายุ 12 และ 15 สัปดาห์</td>
                      <td>2-3 เข็ม ระยะห่าง 3 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>เป็นวัคซีนทางเลือก</td>
                    </tr>
                    <tr>
                      <td>ป้องกันเชื้อโคโรนาไวรัส</td>
                      <td>เริ่มตั้งแต่อายุ 6 สัปดาห์ ฉีดทุก 3 อาทิตย์ จนกว่าจะอายุครบ 12 สัปดาห์</td>
                      <td>2-3 เข็ม ระยะห่าง 3 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>เป็นวัคซีนทางเลือก</td>
                    </tr>
                    <tr>
                      <td>ถ่ายพยาธิ</td>
                      <td>อายุ 8 และ 11 สัปดาห์</td>
                      <td>2 เข็ม ระยะห่าง 3-4 สัปดาห์</td>
                      <td>ทุก 6 เดือน</td>
                      <td>เป็นวัคซีนทางเลือก</td>
                    </tr>
                    <tr>
                      <td>ป้องกันโรคไข้ฉี่หนู</td>
                      <td>อายุ 8 และ 11 สัปดาห์</td>
                      <td>2 เข็ม ระยะห่าง 3-4 สัปดาห์</td>
                      <td>ทุกปี</td>
                      <td>มักฉีดร่วมกับโรคไข้หัดสุนัข และโรคตับอักเสบ</td>
                    </tr>
                    <tr>
                      <td>ป้องกันโรคพิษสุนัขบ้า (เรบีส์)</td>
                      <td>อายุ 3 เดือน</td>
                      <td>1 เข็ม</td>
                      <td>ทุกปี</td>
                      <td>บางที่แนะนำให้ฉีดก่อนอายุ 3 เดือน กรณีที่อยู่ในพื้นที่เสี่ยงต่อการระบาด</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
