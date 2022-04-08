<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Восстановление пароля</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/account.css">
	<link rel="stylesheet" href="../css/fonts.css">
</head>
<body>
<div class="acc">
	<i class="fal fa-exclamation-circle"></i>
	<h1><a href="../index.php">bind</a></h1>
	<div class="wrapper">
		<div class="form-area">
			<div class="d-flex twink_link mb-5">
				<a class="p-2 pointer" style="text-decoration: underline;" href="login.php">
					Войти
				</a>
				<div class="vert-line"></div>
				<a class="p-2 pointer" style="text-decoration: underline;" href="registration.php">
					Создать аккаунт
					<!-- <hr> -->
				</a>
			</div>
			<div class="text-center mx-15p">
				<h4 style="" class="pass-h">ДЛЯ ПОЛУЧЕНИЯ НОВОГО ПАРОЛЯ</h4>
				<p class="pass-p">Впишите ваш адрес электронной почты (E-mail). Мы вышлем на него ваш новый пароль. В дальнейшем вы можете поменять его в личном кабинете.</p>
			</div>
			<form name="emailform" method="get" action="" class="mt-4">
				<div class="d-flex text_error">
					<p>E-mail</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Введите email</p>
					</div>
				</div>
				<input type="email" name="email" placeholder="" class="text-secondary"/>
				<input type="submit" value="Запросить новый пароль"/>
			</form>
		</div>
	</div>
</div>
</body>
</html>