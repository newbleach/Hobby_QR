<meta charset="utf-8">
<?php
include('../condb.php'); 

$DogBreedName = $_POST["DogBreedName"];
$DogBreedPersonality = $_POST["DogBreedPersonality"];
$DogBreedCharacter = $_POST["DogBreedCharacter"];
$DogBreedCare = $_POST["DogBreedCare"];
$DogBreedHerdsman = $_POST["DogBreedHerdsman"];
$DogBreedHealthIssues = $_POST["DogBreedHealthIssues"];
$DogBreedNutrients = $_POST["DogBreedNutrients"];

	$check = "
	SELECT  DogBreedName 
	FROM tbl_dog_breed
	WHERE DogBreedName = '$DogBreedName' 
	";
    $result1 = mysqli_query($condb, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

	if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

	$sql = "INSERT INTO tbl_dog_breed
	(
	DogBreedName,
	DogBreedPersonality,
	DogBreedCharacter,
	DogBreedCare,
	DogBreedHerdsman,
	DogBreedHealthIssues,
	DogBreedNutrients
	)
	VALUES
	(
	'$DogBreedName',
	'$DogBreedPersonality',
	'$DogBreedCharacter',
	'$DogBreedCare',
	'$DogBreedHerdsman',
	'$DogBreedHealthIssues',
	'$DogBreedNutrients'
	)";

	$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
}
	mysqli_close($condb);

	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('เพิ่มข้อมูลสำเร็จ');";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	//echo "alert('Error!!');";
	echo "window.location = 'table_type_dtag.php'; ";
	echo "</script>";
}
?>