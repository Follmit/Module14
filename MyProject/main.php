<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="style.css">
	<title>Alexey</title>
</head>
<body>
	<canvas></canvas>
	<script type="text/javascript" src="stars.js"></script>
	<p><?php echo $a ?></p>

	<div class="form">
		<div class="info">

			<?php include "ava.php"; ?>

			<div class="bio"> 
				<?php echo $startInfo ?> 
			</div>

			<?php include "myage.php" ?>

			<p> 
				<?php echo 'Меня зовут: ',$name, ' ', $surname, '<img src="image/batman.png" width="25" height="25">', '<br/><br/>',

				'Мой возраст: ', $myAge, ' years', '<img src="image/poin.png" width="25" height="25">','<br/><br/>',

				'Я из города: ', $myCity, '<img src="image/city.png" width="25" height="25">','<br/><br/>',

				'Мой Телеграмм: ', $myTelegram, '<img src="image/tg.png" width="25" height="25">','<br/><br/>',

				'Статус: ', $myStatus, '<img src="image/student.png" width="25" height="25">','<br/><br/>';

				?>
			</p>
		</div>
		<div class="nextPoint"><a href="another_Info.php" ><img src="image/next.png" alt="Next page"></a></div>
	</div>
		
</body>
</html>