<?php 
session_start();
        if(isset($_POST['AdminUsername'])){
                  include("condb.php");

                  $AdminUsername = $_POST['AdminUsername'];
                  $AdminPassword = md5($_POST['AdminPassword']);

                  $sql="SELECT * FROM tbl_admin 
                  WHERE  AdminUsername='".$AdminUsername."' 
                  AND  AdminPassword='".$AdminPassword."' ";

                  $result = mysqli_query($condb,$sql);

                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["AdminID"] = $row["AdminID"];
                      $_SESSION["AdminLevel"] = $row["AdminLevel"];

                      if($_SESSION["AdminLevel"]=="admin"){ 
                        Header("Location: admin/");

                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }
        }else{

             Header("Location: index.php"); 

        }
?>