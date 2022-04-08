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
$declarations_query = mysqli_query($connect,'SELECT * FROM declarations WHERE authorid="'.$_GET["id"].'"');
$declarations_num = mysqli_num_rows($declarations_query); //$col = $query->num_rows;
$declarations = [];
for ($i=0; $i < $declarations_num; $i++) { 
	$declarations[$i] = $declarations_query->fetch_assoc();
};

$users_query = mysqli_query($connect,'SELECT * FROM declarations INNER JOIN users ON declarations.volidDone=users.idUser OR declarations.volidTake=users.idUser WHERE authorid="'.$_GET["id"].'"');
$users_num = mysqli_num_rows($users_query); //$col = $query->num_rows;
$users = [];
for ($i=0; $i < $users_num; $i++) { 
	$users[$i] = $users_query->fetch_assoc();
};
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
		<a href="../cabinet/inneed_info.php?id=<?php echo $_GET['id'] ?>" class="text-decoration-none"><p class="py-2 px-4 ml-3 ml-auto">Данные о себе</p></a>
		<p class="py-2 px-4 mr-3 active mr-auto">Созданные объявления</p>
	</div>
	<div class="row mx-auto">
		<div class="col-6 px-3">
			<?php $i_users = 0; for ($i=0; $i < intdiv($declarations_num, 2)+($declarations_num%2); $i+=1) { ?> <!-- нач -->
			<div class="back d-flex declaration my-3" style="">
				<div class="sidecolor mr-4" style="<?php if ($declarations[$i]['quick']==1) { echo 'background: linear-gradient(44.44deg, #32488A -15.89%, #339FCE 50.69%, #33DDFF 123.49%);'; } ?>"></div>
				<div class="my-4 w100 mr-4">
					<div class="d-flex w100">
						<p class="text1"><b><?php if ($declarations[$i]['quick']==1) { echo 'Срочное объявление'; } else { echo 'Обычное объявление'; } ?></b></p><!-- Срочное объявление -->
						<p class="pos-right text1 mr-4"><?php echo $declarations[$i]['date']; ?></p>
					</div>
					<div class="hor-line mt-2 mb-3"></div>
					<p class="text2 text-grey">С чем нужно помочь</p>
					<p class="text2"><?php echo $declarations[$i]['description']; ?></p>
					<p class="text2"><span class="text-grey">Адрес: </span><?php echo $declarations[$i]['address']; ?></p>
					<p class="text2 mb-0"><span class="text-grey"><?php if ($declarations[$i]['volidDone']==1) { echo 'Был выполнен волонтером: '.$users[$i_users]['name']; $i_users++; } else if ($declarations[$i]['volidTake']==1) { echo 'Был взят волонтером: '.$users[$i_users]['name']; $i_users++; } else { echo 'Ещё никто не отозвался на объявление'; }?></span></p>
				</div>
			</div>
			<?php } ?> <!-- заканч -->
		</div>
		<div class="col-6 px-3">
			<?php for ($i=intdiv($declarations_num, 2)+($declarations_num%2); $i < $declarations_num; $i+=1) { ?> <!-- нач -->
			<div class="back d-flex declaration my-3" style="">
				<div class="sidecolor mr-4" style="<?php if ($declarations[$i]['quick']==1) { echo 'background: linear-gradient(44.44deg, #32488A -15.89%, #339FCE 50.69%, #33DDFF 123.49%);'; } ?>"></div>
				<div class="my-4 w100 mr-4">
					<div class="d-flex w100">
						<p class="text1"><b><?php if ($declarations[$i]['quick']==1) { echo 'Срочное объявление'; } else { echo 'Обычное объявление'; } ?></b></p><!-- Срочное объявление -->
						<p class="pos-right text1 mr-4"><?php echo $declarations[$i]['date']; ?></p>
					</div>
					<div class="hor-line mt-2 mb-3"></div>
					<p class="text2 text-grey">С чем нужно помочь</p>
					<p class="text2"><?php echo $declarations[$i]['description']; ?></p>
					<p class="text2"><span class="text-grey">Адрес: </span><?php echo $declarations[$i]['address']; ?></p>
					<p class="text2 mb-0"><span class="text-grey"><?php if ($declarations[$i]['volidDone']==1) { echo 'Был выполнен волонтером: '.$users[$i_users]['name']; $i_users++; } else if ($declarations[$i]['volidTake']==1) { echo 'Был взят волонтером: '.$users[$i_users]['name']; $i_users++; } else { echo 'Ещё никто не отозвался на объявление'; }?></span></p>
				</div>
			</div>
			<?php } ?>
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