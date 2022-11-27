<?php


if(isset($_GET['parola'])){
	$parola = $_GET['parola'];
} else {
$parola = 'Parola non permessa';
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
        <h1><?php echo "$parola" ?> </h1>
</body>
</html>