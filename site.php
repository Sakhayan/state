<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php  
			$connect = mysqli_connect("127.0.0.1", "root", "", "blog");
			
			$query = mysqli_query($connect, "SELECT * FROM posts");
			
			
		?>
		<?php 
			
			$data_base = [
				[
					"title" => "Статья 1",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					 cillum dolore eu fugiat nulla pariatur.",
			 		"img" => "img/1.jpg",
			 		"users" => "user12",
			 		"site" => "stat1.php"
				],
				[
					"title" => "Статья 2",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					 cillum dolore eu fugiat nulla pariatur.",
			 		"img" => "img/2.jpg",
			 		"users" => "user30",
			 		"site" => "stat2.php"
				],
				[
					"title" => "Статья 3",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. ",
			 		"img" => "img/3.jpg",
			 		"users" => "user50",
			 		"site" => "stat3.php"
				],
				[
					"title" => "Статья 4",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. ",
			 		"img" => "img/4.jpg",
			 		"users" => "user90",
			 		"site" => "stat4.php"
				],
				[
					"title" => "Статья 5",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 consequat. ",
			 		"img" => "img/5.jpg",
			 		"users" => "user25",
			 		"site" => "stat5.php"
				],

				
			]


		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>

		
		<hr>

		<?php
		 echo "<a href = 'admin.php'>"."Админ-панель"."</a>"
		?>
		<?php 
			$a = $_GET["Логин"];
			echo "<h1>Привет ".$a."</h1>";
		 ?>
		<div class="col-12" style="">
			<?php
				for ($i=0; $i < 4; $i++) {
					$result = $query->fetch_assoc(); 
					echo "<h1>".$result["title"]."</h1>"; 
					echo "<h1>".$result["text"]."</h1>";
					echo "<img class='w-100' src='".$result["img"].".jpg'>" ;
					echo "<h1>".$result["author"]."</h1>"; 
				}


			?>
		 <!-- 2. выводите все элементы в этом диве -->
		 	<?php
		 		echo $_GET["title"];
		 		echo $_GET["text"];
		 		echo $_GET["author"];

		 	?>
			 <?php 
				for ($i=0; $i < count($data_base); $i++) { 
					echo "<h1><a href='post.php?lol=$i' >".$data_base[$i]["title"]."</a></h1>";
					echo "<p>".$data_base[$i]["short_text"]."</p>";
					echo "<img class='w-100' src=".$data_base[$i]["img"].">";
					echo "<p>Автор ".$data_base[$i]["users"]."</p>";
					echo "Опубликовано ".date("Y-m-d ");
					echo "<hr>";
					
				}
			 ?>

			 
		</div>
	</div>

</body>
</html>