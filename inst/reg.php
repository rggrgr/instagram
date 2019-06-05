<?php 
	header("Location: http://dyachkovskiy/inst/login.php");
	$link = mysqli_connect("127.0.0.1", "root", "", "dyachkovskiy_ch_16");
	$sql = "INSERT INTO regis (mail, name, log, pass)
	VALUES ('" . $_POST['mail'] . "',
	 '" . $_POST['name'] . "',
	 '" . $_POST['log'] . "',
	 '" . $_POST['pass'] . "')";
	$message = 'Ваш логин: ' . $_POST['log'] . ' и пароль: ' . $_POST['pass'];
	mail( $_POST['mail'], 'Регистрация', $message);
	mysqli_query($link, $sql);
?>