<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/account.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/fonts.css">
</head>
<body>
<div class="acc">
	<i class="fal fa-exclamation-circle"></i>
	<h1><a href="../main.php">bind</a></h1>
	<div class="wrapper">
		<div class="form-area">
			<div class="d-flex twink_link mb-5">
				<a class="p-2 pointer" style="" href="login.php">
					Войти
				</a>
				<div class="vert-line"></div>
				<a class="p-2" style="text-decoration: underline;">
					Создать аккаунт
					<!-- <hr> -->
				</a>
			</div>
			<form name="regform" method="POST" action="../php/registration.php" class="mt-4">
				<div class="d-flex text_error">
					<p>Имя пользователя</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="text" name="login" placeholder="" class="text-secondary" autocomplete="off"/>
				<div class="d-flex text_error">
					<p>Полное имя</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="text" name="name" placeholder="" class="text-secondary" autocomplete="off"/>
				<div class="d-flex text_error">
					<p>E-mail</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="email" name="email" placeholder="" class="text-secondary " autocomplete="off"/>
				<div class="d-flex text_error">
					<p>Пароль</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="password" name="password" placeholder=""  class="text-secondary"/>
				<div class="d-flex text_error">
					<p>Повторите пароль</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Пароли не совпадают</p>
					</div>
				</div>
				<input type="password" name="password2" placeholder=""  class="text-secondary"/>
				<div class="d-flex text_error">
					<p>Укажите кем вы являетесь</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Выберите вариант</p>
					</div>
				</div>
				<div class="radio-area">
					<input type="radio" name="volunteerOrInneed" value="1" />Волонтёр
    				<input type="radio" name="volunteerOrInneed" value="0" />Нуждающийся
				</div>
				<input type="submit" value="Регистрация"/>
				<!-- <div class="terms">
					<p>Регистрируясь, вы принимаете условия <a href="">пользовательского соглашения</a></p>
				</div> -->
			</form>
		</div>
	</div>
	<div class="text-center have_acc">
		<p>У вас уже есть аккаунт? <a href="../logins/login.php"><b>Войти</b></a></p><!-- вставить ссылку -->
	</div>
</div>
</body>
</html>