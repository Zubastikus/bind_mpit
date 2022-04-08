<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>bind</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>
<body>
<header class="navbar navbar-expand-md fixed-top bg-light">
	<div class="container-fluid py-2 px-5 text-black-50">
		<div class="col-5">
			<a class="maisonBold" href="../index.php?id=<?php echo $_GET['id'] ?>" style="font-size: 2.5rem">bind</a>
		</div>
  		<div class="col-7 px-4">
    		<a href="../main.php"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#">Выйти</button></a>
    		<a href="../cabinet/inneed_info.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-default pos-right mx-2 px-3" href="#"><span class="iconify" data-icon="eva:person-outline" style=""></span></button></a>
    		<a href="../declaration/make.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-blue-shine pos-right mx-2 px-3" href="#">Создать объявление</button></a>
  		</div>
	</div>
</header>
<main>
<div class="about">
    <div class="row mx-5p" style="">
      	<div class="col-lg-12 py-5">
      		<div class="d-flex">
      			<h2>О ПРОЕКТЕ</h2>
      		</div>
        	<p class="mt-6r-mr-3r notFull"><b class="MaisonNeueBold">bind</b> - это сервис, на котором волонтеры города Якутска смогут ввести добровольческую деятельность, помогая нуждающимся в этом людям. На сайте нуждающиеся смогут подавать объявления о необходимой помощи, в свою очередь волонтеры могут рассматривать созданные заявки и отвечать на них.</p>
      	</div> <!-- /col-lg-6 -->
    </div><!-- /.row -->

    <div class="row h-35vw text-light" style="background-color: #5215F8;">
      	<div class="col-lg-6 h-100" style="background-image: url(img/1.png); background-size: 100% 100%;">
        	
      	</div> <!-- /col-lg-6 -->
      	<div class="col-lg-6 h-100">
      		<div class="p-10p">
      			<h4>Как это работает</h4>
        		<p class="text_bigger mt-4"><b class="maisonBold">bind</b> нацелен на людей, которым требуется помощь по выполнению бытовых дел.</p>
        		<div class="notFull">
        			<div class="hor-line-wh mb-4"></div>
        			<p>Вам необходимо создать объявление, которое будет размещено на сайте, волонтеры будут оставлять свои заявки с целью помочь, а вам нужно будет выбрать понравившегося волонтера.</p>
        		</div>
      		</div>
      	</div> <!-- /col-lg-6 -->
    </div><!-- /.row -->
    <div class="row h-35vw text-light" style="background-color: #CE0037; height: 45vw;">
      	<div class="col-lg-6 h-100">
      		<div class="p-10p">
      			<h4>Колл-центр</h4>
        		<p class="text_bigger mt-4">Команда <b class="MaisonNeueBold">bind</b> создала колл-центр специально для людей, у которых нет доступа к нашему сайту ввиду ограничения технических возможностей.</p>
        		<div class="notFull">
        			<div class="hor-line-wh mb-4"></div>
        			<p>Если вы испытываете трудности с созданием объявления, колл-центр прекрасно подойдет для вас. Нуждающийся звонит на номер, модератор обрабатывает ваш запрос и создает заявку на сайте, после чего передаст данные волонтера вам </p>
        		</div>
        		<p class="p-btn" style="">Номер колл-центра: 28-13-83 или +7 (914) 224-29-74</p>
      		</div>
      	</div> <!-- /col-lg-6 -->
      	<div class="col-lg-6 h-100 bg-success" style="background-image: url(img/3.png); background-size: 100% 100%;">
        	
      	</div> <!-- /col-lg-6 -->
    </div><!-- /.row -->
</div>
<!-- <div class="declaration">
  	<div class="margT">
  		
  	</div>
  	<div class="">
  		<p><button class="">Создать объявление</button></p>
  	</div>
</div> -->
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








<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
</body>
</html>