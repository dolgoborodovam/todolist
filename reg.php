<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	
	<title>Регистрация</title>
</head>

<body>
	<form action="save_user.php" align="center" method="POST">
	<div class="container p-3 mb-2 bg-dark text-white col-md-12" align="center" id="header">
	<h1>FОРТРЕСС</h1>
	</div>
	<div class="form-group mx-sm-3 mb-2 col-md-12" id="index">
	<p>
		<h2 class="font-bold">Введите ваш логин <input type="text" class="form-control-lg" widht= auto align="center"name="login"></h2>
	</p>
	<p>
		<h2 class="font-bold">Введите ваш пароль<input type="password" class="form-control-lg" widht= auto align="center"name="password"></h2>
	</p>
	<p>
		<h2 class="font-bold">Повторите ваш пароль<input type="password" class="form-control-lg" widht= auto align="center"name="password1"></h2>
	</p>
	<p>
		<button type="submit" class="btn btn-dark">Зарегистрироваться</button></a>
		<a href="index.php"><button type="button" align ='center' class="btn btn-dark">Назад</button></a>
	</p>
	</div>
	</form>
</body>
</html>