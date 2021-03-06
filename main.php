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
</head>
<body>
<header class="navbar navbar-expand-md fixed-top bg-light">
	<div class="container-fluid py-2 px-5 text-black-50">
		<div class="col-5">
			<a class="maisonBold" href="#" style="font-size: 2.5rem">bind</a>
		</div>
  		<div class="col-7 px-4">
  			<a href="logins/login.php"><button type="button" class="btn btn-blue-shine pos-right mx-2 px-3">Войти</button></a>
    		<a href="logins/registration.php"><button type="button" class="btn btn-lineless pos-right mx-2 px-3">Создать аккаунт</button></a>
  		</div>
	</div>
</header>
<main>
<div class="about">
    <div class="row mx-5p" style="">
      	<div class="col-lg-12 py-5">
      		<div class="d-flex">
      			<h2>О ПРОЕКТЕ</h2>
      			<div class="ml-auto">
      				<div class="d-flex">
      					<p class="mr-3 text-center"><a href="#n1" class="text-decoration-none">Работа сервиса</a></p>
      					<p class="mx-3 text-center"><a href="#n2" class="text-decoration-none">Рейтинг</a></p>
      					<p class="mx-3 text-center"><a href="#n3" class="text-decoration-none">Что даёт рейтинг</a></p>
      					<p class="ml-3 text-center"><a href="#n4" class="text-decoration-none">Карта волонтёра</a></p>
      				</div>
      			</div>
      		</div>
        	<p class="mt-6r-mr-3r notFull"><b class="MaisonNeueBold">bind</b> - это сервис, на котором волонтеры города Якутска смогут ввести добровольческую деятельность, помогая нуждающимся в этом людям. На сайте нуждающиеся смогут подавать объявления о необходимой помощи, в свою очередь волонтеры могут рассматривать созданные заявки и отвечать на них.</p>
      	</div> <!-- /col-lg-6 -->
    </div><!-- /.row -->

    <div class="row h-35vw text-light" style="background-color: #5215F8;" id="n1">
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

    <div class="row h-35vw" style="background-color: rgb(233,233,246);" id="n2">
      	<div class="col-lg-6 h-100">
      		<div class="p-10p">
      			<h4>Как работает система рейтинга</h4>
        		<p class="text_bigger mt-4">За выполнение заказов от нуждающихся волонтеры повышают свой рейтинг.</p>
        		<div class="notFull">
        			<div class="hor-line mb-4"></div>
        			<p>Также после каждого выполненного заказа нуждающиеся имеют возможность выставить свою оценку волонтеру, к тому же написать отзыв. За выполнение срочных заказов будет начисляться большее количество очков, по сравнению с обычными заказами.</p>
        		</div>
      		</div>
      	</div> <!-- /col-lg-6 -->
      	<div class="col-lg-6 h-100 bg-success" style="background-image: url(img/2.png); background-size: 100% 100%;">
        	
      	</div> <!-- /col-lg-6 -->
    </div><!-- /.row -->
</div>
<!-- кубок -->
<div style="background-image: url(img/кубок.png); background-size: 100% 100%;" class="h-50vw rate_give" id="n3">
	<div class="margT"></div>
	<div class="mustW">
		<h4>Что мне дает система рейтинга?</h4>
		<p class="text_bigger mt-4"><b class="maisonBold">bind</b>  готов вознаграждать волонтеров, которые на постоянной основе помогают людям с ограниченными возможностями жить лучше.</p>
		<div class="notFull">
			<div class="hor-line-wh mb-4"></div>
		</div>
		<div class="notFull2">
			<p>Постоянное выполнение заказов и хорошие отзывы складываются в оценку вашего рейтинга. Из вашего рейтинга складывается уровень доверия к вашим откликам на объявления. Чем выше ваш рейтинг, тем чаще всего вас будут принимать в качестве волонтера</p>
		</div>
	</div>
</div>
<!-- /кубок -->
<!-- карточка -->
<div style="background-image: url(img/карта.png); background-size: 100% 100%;" class="h-50vw card" id="n4">
	<div class="mustW pos-right blur h100" style="background-color: rgba(0, 0, 0, 0.2);">
		<div class="margT"></div>
		<div class="px-5">
			<h4>Что такое волонтерская карта?</h4>
			<p class="text_bigger mt-4">Именная карта сервиса <b class="maisonBold">bind</b> позволяет накапливать бонусные баллы и тратить их в магазинах партнеров этой акции, оплачивая полную или частичную сумму.</p>
			<div class="notFull pos-right">
				<div class="hor-line-wh mb-4"></div>
			</div>
			<div class="notFull2 pos-right">
				<p>Если у вас присутствует желание постоянно заниматься волонтерской деятельностью и помогать людям, то вы можете подать заявку на получение карты, нажав на кпопку ниже</p>
			</div>
		</div>
	</div>
</div>
<!-- /карточка -->

<!-- <div class="s3rd bg-danger">
	<div class="row" style="height: 100px;">
		<div class="col-9">
			<h2 class="m-5">Новости</h2>
		</div>
		<div class="col-3">
			<button type="button" class="btn btn-outline-light m-5">Просмотреть все</button>
		</div>
	</div>
	<div class="container p-5 bg-success">
		<div class="row">
			<div class="col-3">
				<img src="img/me.jpg" style="height: 300px; width: 300px;">
			</div>
			<div class="col-9 pos-relative">
				<h3>большой лорем</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<hr class="pos-bottom w-100">
			</div>
		</div>
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








<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
</body>
</html>