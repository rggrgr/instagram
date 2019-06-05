<?php $link = mysqli_connect("127.0.0.1", "root", "", "dyachkovskiy_ch_16");
$c = mysqli_query($link, "SELECT * FROM regis WHERE mail ='" . $_POST['mail'] . "' AND pass ='" . $_POST['pass'] . "' ");
for ($i=0; $i < $c->num_rows; $i++) {
	$user = $c->fetch_assoc(); 
	if($c->num_rows != 0){
		$head = 'log.php?id=' . $user['id1'];
	}else{
		$head = 'login.php?error=Нет такого пользователя';
	}
};
	$b = 'Location: http://dyachkovskiy/inst/' . $head;
	header($b);
	
?>