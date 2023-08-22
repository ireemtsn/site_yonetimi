<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">	
		<input type="text" name="blok_adi">
		<input type="number" name="daire_sayisi">
		<button type="submit">Ekle
	</form>



</body>
</html>


<?php 

$blok_adi = $_POST['blok_adi'];
$daire_sayisi = $_POST['daire_sayisi'];


if($_SERVER['REQUEST_METHOD'] === "POST"){
	$connect = mysqli_connect("localhost", "root", "", "site_yonetimi");

	$sql = "INSERT INTO bloklar (blok_adi) VALUES ('$blok_adi')";

	if($connect->)
}

 ?>