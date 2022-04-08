<?php
if ($_GET["id"]!= '') {
	$connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
	$user_query = mysqli_query($connect,'SELECT * FROM users WHERE idUser="'.$_GET["id"].'"');
	$user = $user_query->fetch_assoc();
	if ($user["capacity"] == 0) {
		header('Location: main_inneed.php?id='.$_GET["id"]);
	} else {
		header('Location: main_volunteers.php?id='.$_GET["id"]);
	}
} else {
	header('Location: main.php');
}
