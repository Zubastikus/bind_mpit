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
$connect = mysqli_connect("127.0.0.1","mysql","","bind_mpit");
$users_query = mysqli_query($connect,'SELECT * FROM users WHERE idUser="'.$_GET["id"].'"');
$user = $users_query->fetch_assoc();
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
    		<a href="../declaration/make.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-blue-shine pos-right mx-2 px-3" href="#">Создать объявление</button></a>
  		</div>
	</div>
</header>
<main>
<div class="container-lg text-center pt-5">
	<h2 class="">Личный кабинет</h2>
	<div class="d-flex text-center mx-auto categories mt-4" style="width: 415px;">
		<p class="py-2 px-4 ml-3 active ml-auto">Данные о себе</p>
		<a href="../cabinet/inneed_declarations.php?id=<?php echo $_GET['id'] ?>" class="text-decoration-none"><p class="py-2 px-4 mr-3 mr-auto">Созданные объявления</p></a>
	</div>
	<div class="row mx-auto" style="width: 73rem">
		<div class="col-4 p-3">
			<div class="back p-5" style="">
				<img src="<?php if ($user["photo"]=='') { echo "../img/no_avatar.jpg";} else { echo $user["photo"];}?>" >
				<button class="btn-black-inline mt-3">Изменить фото</button>
				<form class="mt-4">
					<p>Контактный телефон</p>
					<input type="text" name="telephone" placeholder="" class="mb-2" value="<?php echo $user["telephone"] ?>" disabled="true"/>
					<p>Профессия</p>
					<input type="text" name="profession" placeholder="" class="mb-2" value="<?php echo $user["profession"] ?>" disabled="true"/>
					<!-- <p>Возраст</p>
					<input type="text" name="age" placeholder="" class="" value="73" disabled="true"/> -->
				</form>
			</div>
		</div>
		<div class="col-8 p-3">
			<form class="">
				<div class="back px-5 py-4" style="">
					<p>Имя пользователя</p>
					<input type="text" name="login" placeholder="" class="mb-2" value="<?php echo $user["login"] ?>" disabled="true"/>
					<p>Полное имя</p>
					<input type="text" name="name" placeholder="" class="mb-2" value="<?php echo $user["name"] ?>" disabled="true"/>
					<input type="submit" name="" class="btn-black-inline mt-3" value="Редактировать профиль">
				</div>
				<div class="back px-5 py-4" style="margin-top: 2rem;">
					<p style="color: #535353;">О себе</p>
					<p class="mt-3"><?php echo $user["about"] ?></p>
				</div>
			</form>
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
<!--MODAL
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalThx">
	Large modal
</button>

<div class="modal fade bd-example-modal-lg" id="ModalThx" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog blur modal-lg" role="document">
    	<div class="modal-content blur py-4 px-5">
    		<button type="button" class="close pos-right" data-dismiss="modal" aria-label="Close">
      			<span class="iconify" data-icon="akar-icons:cross" style="color: white;"></span>
    		</button>
    		<div class="container mustW">
    			<div class="modal-header text-center">
	        		<h3 class="modal-title mx-auto" id="exampleModalLabel">Спасибо за поданную заявку</h3>
	      		</div>
	      		<div class="hor-line-wh mustW2 mx-auto"></div>
	      		<div class="modal-body text-center">
	        		Мы направим ее в отделение банка и в ближайшее
	время отправим вам письмо на электронную
	почту
	      		</div>
    		</div>
	      		
    	</div>
  	</div>
</div>
-->