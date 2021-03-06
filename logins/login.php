<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Вход</title>
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
				<a class="p-2" style="text-decoration: underline;">
					Войти
				</a>
				<div class="vert-line"></div>
				<a class="p-2 pointer" style="" href="registration.php">
					Создать аккаунт
					<!-- <hr> -->
				</a>
			</div>
			<form name="logform" method="post" action="../php/login.php" class="mt-4">
				<div class="d-flex text_error">
					<p>E-mail или имя пользователя</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="text" name="login_or_email" placeholder="" class="text-secondary" />
				<div class="d-flex text_error">
					<p>Пароль</p>
					<div class="error" style="display: none;">
						<img src="img/error.png">
						<p>Заполните поле</p>
					</div>
				</div>
				<input type="password" name="password" placeholder=""  class="text-secondary"/>
				<input type="submit" value="Войти"/>
				<!-- <div class="terms">
					<p>Регистрируясь, вы принимаете условия <a href="">пользовательского соглашения</a></p>
				</div> -->
			</form>
			<div class="text-center">
				<p class="p-2 m-0"><a href="restore-password.php">Забыли пароль?</a></p> <!-- вставить ссылку -->
			</div>
		</div>
	</div>
	
</div>
</body>
</html>