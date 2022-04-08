<?php
$connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
//login, name, email, password, password2, volunteerOrInneed
//echo $_POST["login"]."<br>".$_POST["name"]."<br>".$_POST["email"]."<br>".$_POST["password"]."<br>".$_POST["password2"]."<br>".$_POST["volunteerOrInneed"]."<br>";
if ($_POST["name"]!= '' and $_POST["password"]!= '' and $_POST["password2"]!= '' and $_POST["email"]!= '' and $_POST["login"]!= '' and $_POST["volunteerOrInneed"]!= '') {
	if ($_POST["password"] == $_POST['password2']) {
		$hashed = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$ins = mysqli_query($connect,'INSERT INTO users (login, name, email, password, capacity) VALUES ("'.$_POST["login"].'","'.$_POST["name"].'","'.$_POST["email"].'","'.$hashed.'","'.$_POST["volunteerOrInneed"].'")');
		header('Location: ../logins/login.php');
	} else {
		header('Location: ../logins/registration.php?error=Пароли+не+совпадают');
	};			
} else {
	header('Location: ../logins/registration.php?error=Заполните+все+поля');
}
