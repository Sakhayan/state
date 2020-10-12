<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body style="display: flex;">
	<?php 
		$connect = mysqli_connect("127.0.0.1", "root", "", "blog");
		$quer = mysqli_query($connect, "SELECT * FROM users");
	 ?>
	<div class="ml-auto">
	 	<?php  
	 		for ($i=0; $i < 4; $i++) {
				$result = $quer->fetch_assoc(); 
				echo "<h1>".$result["name"]."</h1>"; 
				echo "<h1>".$result["email"]."</h1>";
				echo "<h1>".$result["phone"]."</h1>"; 
			};
	 	?>
	</div>
	<div class="mr-auto">
		<form action="site.php" method="GET">
			<p>Заголовок</p>
			<input class="form-control" placeholder="" name="Title">
			<p>Текст</p>
			<input class="form-control" placeholder="" name="text">
			<p>Автор</p>
			<input class="form-control" placeholder="" name="author">
			<button style="background-color: green; border-radius: 3px; color: white">Создать пост</button>
		</form>
	</div>
</body>
</html>