<?php
	$h= "Location: http://dyachkovskiy/inst/log.php?id=" . $_POST['id'];
	header($h);
	$link = mysqli_connect("127.0.0.1", "root", "", "dyachkovskiy_ch_16");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
	$sql = "INSERT INTO posts (txt, img, user_id)
	VALUES ('" . $_POST['txt'] . "', 'images/" . $_FILES['img']['name'] . "', '" . $_POST['id'] . "')";
	mysqli_query($link, $sql);
?>