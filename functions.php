<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>

<?php
    session_start();
    if(isset($_GET['length'])) {
      $length = $_GET['length'];
      $_SESSION["password"] = getPassword($length);
      header('Location: ./yourpassword.php');
    }
  ?>
    
</body>
</html>

<?php
	function getPassword ($length) {
        $length = $_GET['length'];
		$caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+{}|[]';
		$password = '';
		
		for ($i = 0; $i < $length; $i++) {
			$password .= $caratteri[rand(0, strlen($caratteri) -1)];
		}
		return $password;
	}

	echo getPassword($length);
?>