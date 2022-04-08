<?php
$connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
//authorid, description, address, quick + date
//echo $_POST["authorid"]."<br>".$_POST["name"]."<br>".$_POST["email"]."<br>".$_POST["password"]."<br>".$_POST["password2"]."<br>".$_POST["volunteerOrInneed"]."<br>";
if ($_POST["authorid"]!= '' and $_POST["description"]!= '' and $_POST["address"]!= '' and $_POST["quick"]!= '') {
	$ins = mysqli_query($connect,'INSERT INTO declarations (authorid, description, address, quick, date) VALUES ("'.$_POST["authorid"].'","'.$_POST["description"].'","'.$_POST["address"].'","'.$_POST["quick"].'","'.date("Y-m-d").'")');
	header('Location: ../cabinet/inneed_declarations.php?id='.$_POST["authorid"]);		
} else {
	header('Location: ../declaration/make.php?error=Заполните+все+поля&id='.$_POST["authorid"]);
}//date(Y-m-d)
?>