<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyForm</title>
</head>
<body>
    <div class="banner__effects">
        <div style="--duration: 4.2s; --left: 05%" class="effects__item"></div>
        <div style="--duration: 4.0s; --left: 15%" class="effects__item"></div>
        <div style="--duration: 4.7s; --left: 25%" class="effects__item"></div>
        <div style="--duration: 3.2s; --left: 35%" class="effects__item"></div>
        <div style="--duration: 3.0s; --left: 45%" class="effects__item"></div>
        <div style="--duration: 3.5s; --left: 55%" class="effects__item"></div>
        <div style="--duration: 5.0s; --left: 65%" class="effects__item"></div>
        <div style="--duration: 4.3s; --left: 75%" class="effects__item"></div>
        <div style="--duration: 3.1s; --left: 85%" class="effects__item"></div>
        <div style="--duration: 4.1s; --left: 95%" class="effects__item"></div>
    </div>
    
    <?php

    $connection = mysqli_connect("localhost", "root", "Nicolas.1606", "cadastros");

    if ($connection) {
        echo "Conected!";
    } else {
        echo "Error.";
    }

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $gender    = $_POST['gender'];
    $email     = $_POST['email'];
    $telephone = $_POST['tel'];

    $sql = "INSERT INTO cadastros.dados (firstname, lastname, birthdate, gender, email, telephone)
    VALUES ('$firstname', '$lastname', '$birthdate', '$gender', '$email', '$telephone');";
    mysqli_query($connection, $sql);
    ?>

    <form class="form">
        <h1>Dados enviados com sucesso!</h1>
    </form>

</body>
</html>
