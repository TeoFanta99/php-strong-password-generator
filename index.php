<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
	L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato. -->
</head>
<body>

    <form>
		<span>Lunghezza della tua password: </span>
		<input type="number" name="length" min="10" max="100">
        <button type="submit">GENERA PASSWORD</button>
    </form>

	<?php 
	$length = $_GET['length'];
	echo 'La password è lunga ' . $length . '  caratteri'; ?> 
	
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



