<meta charset="utf-8">
<?php
include('../../condb.php'); 

	$OwnerID  = $_POST["OwnerID"];
	$Password1  = md5($_POST["Password1"]);
	$Password2  = md5($_POST["Password2"]);

	if($Password1 != $Password2){
		echo "<script type='text/javascript'>";
			echo "alert('password ไม่ตรงกัน กรุณาใส่่ใหม่อีกครั้ง ');";
			echo "window.location = 'change_password.php'; ";
		echo "</script>";

	}else{

	$sql = "UPDATE tbl_owner SET 
	Password ='$Password1'
	WHERE OwnerID=$OwnerID
	 ";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	}

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไข password สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
}
?>