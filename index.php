<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
			<!-- css, font and bootstrap links -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
			<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="style.css">
		<title>welcome to kawaii-bot</title>

	</head>

	<body>

		<div class="text-center">

		<?php
			if ($_GET['player_name'] == NULL):
		?>

				<form>
					<label for="name">your name</label>
					<input type="text" name="name" id="name">
					<input type="submit" value="Send">
				</form>

			<?php 

				else:

					$name =	$_GET['name'];
					$half_name_length = (int) (mb_strlen($name) /2);
					$remaining_chars = mb_strlen($name) - $half_name_length;
					$name_end = mb_substr($name, $half_name_length, $remaining_chars);
					$name_beginning = mb_substr($name, 0, $half_name_length);
					$botname = $name_end . $name_beginning;
			 ?>

			 	<h1><?= $botname ?></h1>

			<?php endif  ?>

		</div>

	</body>

</html>