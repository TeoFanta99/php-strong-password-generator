<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>

<br>

<?php 
	$length = $_GET['length'];
	echo 'La password è lunga ' . $length . '  caratteri';
?>

<br>
<br>

<?php
	function getPassword ($length) {
		$caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|[]';
		$password = '';
		
		for ($i = 0; $i < $length; $i++) {
			$password .= $caratteri[rand(0, strlen($caratteri) -1)];
		}
		return $password;
	}

	echo getPassword($length);
?>
    
</body>
</html>