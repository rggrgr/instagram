<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php 
		$link = mysqli_connect("127.0.0.1", "root", "", "dyachkovskiy_ch_16");
		$c = mysqli_query($link, "SELECT * FROM regis WHERE id1 ='" . $_GET['id'] . "' ");
		for ($i=0; $i < $c->num_rows; $i++) { 
			$user = $c->fetch_assoc();
			echo $user['name'];
		}
	?>
	<div class="mb-4 col-6 mx-auto">
		<form action="insert.php" method="POST" enctype="multipart/form-data">
			<?php 
				echo '<input type="hidden" name="id" placeholder="post" class="form-control mb-2" value = "' . $user['id1'] . '"> ';
			?>
			<input type="" name="txt" placeholder="text" class="form-control mb-2">
			<input name="img" type="file" class="">
			<button class="btn btn-primary">добавить</button>
		</form>
	</div>
	<?php
		$link = mysqli_connect("127.0.0.1", "root", "", "dyachkovskiy_ch_16");
		$b = mysqli_query($link, "SELECT * FROM posts INNER JOIN regis ON posts.user_id = regis.id1 ORDER BY id DESC");
		for ($i=0; $i < $b->num_rows; $i++) { 
			$post = $b->fetch_assoc();
	?>
	<div class="col-11 mx-auto">
		<div class="row">
			<div class="col-1 p-0">
				<?php 
					echo '<p>' . $post['log'] . '</p>'; 
				?>
			</div>
			<div class="col-11 py-0 px-4">
				<?php
					echo '<img class = "border" src = "' . $post['img'] . '">'; 
					echo '<p>' . $post['txt'] . '</p>';
				?>
			</div>
		</div>
	</div>
	<?php 
		};
	?>
	<script type="text/javascript">
		
	</script>
</body>
</html>