<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
<?php
    echo "Hoşgeldiniz ";
    if(isset($_POST["email"])&& $_POST["email"]!=""){
        echo $_POST["email"];
    }else{
        header('Location: login.html'); // login başarısızsa login sayfasına geri yönlendirme
        exit;
    ?>
</body>
</html>