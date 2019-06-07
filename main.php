<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>Todo list</title>
</head>
<body>
	<div class="container p-3 mb-2 bg-dark text-white col-md-12" align="center" id="header">
	<h1>ToDoList</h1>
	</div>
	<div class="container p-3 mb-2 bg-light col-md-12" align="center" id="p1">
		<div class="form-group mx-sm-3 mb-2">
			<input class="" type="text" id="text" name="text" placeholder="to do...">
			
			<label class="btn btn-primary" onclick="add_list()">Добавить</label>
			<label onclick="del()">dsfds</label>
		</div>
		<div align="left" id="list"></div>
	</div>


	<script src="main.js"></script>
</body>
</html>