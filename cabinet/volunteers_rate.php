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
<body>
<header class="navbar navbar-expand-md fixed-top bg-light">
	<div class="container-fluid py-2 px-5 text-black-50">
		<div class="col-5">
			<a class="maisonBold" href="../index.php?id=<?php echo $_GET['id'] ?>" style="font-size: 2.5rem">bind</a>
		</div>
  		<div class="col-7">
    		<a href="../main.php"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#">Выйти</button></a>
    		<a href="../cabinet/volunteers_info.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#"><span class="iconify" data-icon="eva:person-outline" style=""></span></button></a>
  		</div>
	</div>
</header>
<main>
<div class="container-lg text-center pt-5">
	<h2 class="">Личный кабинет</h2>
	<div class="d-flex text-center mx-auto categories mt-4" style="width: 533px;">
		<a href="../cabinet/volunteers_info.php?id=<?php echo $_GET['id'] ?>" class="text-decoration-none"><p class="py-2 px-4 ml-3 ml-auto">Данные о себе</p></a>
		<p class="py-2 px-4 mx-3 active mr-auto">Рейтинг</p>
		<a href="../cabinet/volunteers_done.php?id=<?php echo $_GET['id'] ?>" class="text-decoration-none"><p class="py-2 px-4 mr-3 mr-auto">Выполненные заказы</p></a>
	</div>
	<div class="row mx-auto">
		<div class="col-4 px-3">
			<!-- нач -->
			<div class="my-3 mx-3" style="background-image: url('../img/рейтинг.png'); background-size: 100% 100%; height: 33rem;">
				
			</div>
			<!-- заканч -->
		</div>
		<div class="col-8 px-5">
			<div class="my-3 mx-3" style="background-image: url('../img/система баллов.png'); background-size: 100% 100%; height: 33rem;">
				
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