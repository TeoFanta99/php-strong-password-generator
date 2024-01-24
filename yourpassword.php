<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>
</head>

<body>
    <?php
    session_start();
    $password = $_SESSION["password"];
    echo "Password generata: $password"; 
    ?>

    <a href="index.php">
        <button type="button">
            HOME        
        </button>
    </a>
</body>
</html>