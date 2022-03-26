<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarPHP</title>
</head>
<body>

    <?php 
    $ucapan='Selamat Datang';
    $nama=$_GET['nama'];
    ?>

    <h1>Hello 
        <?php 
    echo $ucapan. ' '.$nama;
     ?></h1>
</body>
</html>