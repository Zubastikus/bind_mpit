<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bind</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/cabinet.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<?php
// $connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
// $users_query = mysqli_query($connect,'SELECT * FROM users WHERE idUser="'.$_GET["id"].'"');
// $user = $users_query->fetch_assoc();
?>
<body>
<header class="navbar navbar-expand-md fixed-top bg-light">
	<div class="container-fluid py-2 px-5 text-black-50">
		<div class="col-5">
			<a class="maisonBold" href="../index.php?id=<?php echo $_GET['id'] ?>" style="font-size: 2.5rem">bind</a>
		</div>
  		<div class="col-7">
    		<a href="../main.php"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#">Выйти</button></a>
    		<a href="../cabinet/inneed_info.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#"><span class="iconify" data-icon="eva:person-outline" style=""></span></button></a>
  		</div>
	</div>
</header>
<main>
<div class="container-lg text-center pt-5">
	<div class="row mx-auto" style="width: 73rem">
		<div class="col-12 p-3">
			<div class="back py-4 text-center make-declaration" style="">
				<h3>Создать новое объявление</h3>
				<div class="hor-line mx-auto mt-4 mb-4"></div>
				<p class="notFull mx-auto">Опишите ниже ситуацию, в которую вы попали и адрес, а также то, что необходимо от волонтера. Например, на улице гололед, а вы не можете выйти за продуктами, поэтому вы пришли за помощью волонтера</p>
				<form class="" action="../php/makeDec.php" method="POST">
					<div class="mt-4 likeInput px-0">
						<h4 class="text-dark mx-3">Описание ситуации</h4>
						<input type="text" name="description" class="">
					</div>
					<div class="mt-3 likeInput px-0">
						<h4 class="text-dark mx-3">Адрес</h4>
						<input type="text" name="address" class="">
					</div>
					<div class="form_toggle mt-3">
						<div class="form_toggle-item item-1">
							<input id="fid-1" type="radio" name="quick" value="off" checked>
							<label for="fid-1">Обычное объявление</label>
						</div>
						<div class="form_toggle-item item-2">
							<input id="fid-2" type="radio" name="quick" value="on">
							<label for="fid-2">Срочное объявление</label>
						</div>
					</div>
					<input type="hidden" name="authorid" value="<?php echo $_GET['id']; ?>">
					<input type="submit" name="" class="btn-black-inline mt-3" value="Создать объявление">
				</form>
			</div>
		</div>
	</div>
</div>
</main>
<footer>
	<div class="margT">
		
	</div>
	<div class="base d-flex pt-2">
		<div>
			<p class="mb-2"><b class="MaisonNeueBold">Телефон: <a href="">+7 (914) 828-13-83</a> или <a href="">+7 (924) 563-10-06</a></b></p>
			<p class="mb-2"><b class="MaisonNeueBold">Электронная почта: <a href="">bind.volunteer@gmail.com</a></b></p>
			<p class="mb-2"><b class="MaisonNeueBold">Телеграм: <a href="">t.me/bindVolunteerTeam</a></b></p>
		</div>
		<div class="pos-right">
			<p class="mb-2"><b class="MaisonNeueBold">© 2022 MICROWAVE</b></p>
		</div>
	</div>
</footer>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
</body>
</html>