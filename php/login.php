<?php
$connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
//login_or_email, password
if ($_POST["login_or_email"]!= '' and $_POST["password"]!= '') {
	$users_query = mysqli_query($connect,'SELECT * FROM users WHERE login="'.$_POST["login_or_email"].'" OR email="'.$_POST["login_or_email"].'"');
	//echo 'SELECT * FROM users WHERE login='.$_POST["login_or_email"].' || email='.$_POST["login_or_email"];
	$user = $users_query->fetch_assoc();
	if (password_verify($_POST["password"], $user["password"])) {
		//echo 'Location: ../index.php?id='.$user["idUser"].'&capacity='.$user["capacity"];
		header('Location: ../index.php?id='.$user["idUser"].'&capacity='.$user["capacity"]);
	} else {
		header('Location: ../logins/login.php?error=Введённые+данные+неверны');
	};	
} else {
	header('Location: ../logins/login.php?error=Заполните+все+поля');
}
