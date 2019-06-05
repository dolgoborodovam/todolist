<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Главная страница</title>
</head>
<body>
	<div class="container p-3 mb-2 bg-dark text-white col-md-12" align="center" id="header">
	<h1>ToDoList</h1>
	</div>
	<div class="container p-3 mb-2 bg-light col-md-12" align="center" id="p1">
	<div class="row">
		<div class="col" align="center">
		<form action="check.php" method="POST">
		<div class="form-group mx-sm-3 mb-2 col-md-12" id="index">
			<p>
				<h2 class="font-bold">Логин <input type="text" class="form-control-lg" widht= auto align="right" name="login"></h2>
    		</p>
    		<p>
				<h2 class="font-bold">Пароль <input type="password" class="form-control-lg" widht= auto align="right" name="password"></h2>
			</p>
			<p>
				<button type="submit" class="btn btn-dark">Войти</button>
				<a href="reg.php"><button type="button" class="btn btn-link">Регистрация</button></a>
			</p>   		
  		</div>
  		</div>
	</div>
	</div>
</form>
</body>
</html>