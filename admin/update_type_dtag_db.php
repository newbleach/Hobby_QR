<meta charset="utf-8">
<?php
//condb
include('../condb.php'); 

	$DogBreedName = $_POST["DogBreedName"];
	$DogBreedCare = $_POST["DogBreedCare"];
	$DogBreedID  = $_POST["DogBreedID"];

	$sql = "UPDATE tbl_dog_breed SET 
	DogBreedName='$DogBreedName',
	DogBreedCare='$DogBreedCare'
	WHERE DogBreedID=$DogBreedID
	 ";


	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($condb);
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
}
?>