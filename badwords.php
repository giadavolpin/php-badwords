<?php

$parola = $_GET['nome'];


IF(isset($_GET['nome'])){
	$nome = $_GET['nome'];
} else {
$nome = 'Non ho il nome';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1><?php echo "$nome" ?> </h1>
</body>
</html>