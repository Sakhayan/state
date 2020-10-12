<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
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

				
			];
	echo $data_base[$_GET["lol"]]["title"].$data_base[$_GET["lol"]]["short_text"]  
	?>
</body>
</html>