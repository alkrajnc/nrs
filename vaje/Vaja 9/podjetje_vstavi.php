<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css">
    <link href="../../fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../../fontawesome/css/brands.css" rel="stylesheet">
    <link href="../../fontawesome/css/solid.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<div class="header">
    <a href="./index.php"><i class="fa-regular fa-circle-left"></i></a>
</div>

<div class="formCont">
    <form action="podjetje_vstavi.php" method="post">
        <div class="forminner"><label for="naziv">Naziv:</label>
            <input type="text" name="imePodjetja" id="naziv">
            <label for="mesto">Mesto: </label>
            <input type="text" name="krajPodjetja" id="mesto">
            <input type="submit" value="Poslji"</div>
    </form>
</div>

<?php
$servername = "localhost";
$username = "aljazk";
$password = "geslo-cpanel-admin";
$dbname = "aljazk_podjetje_sers";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST["imePodjetja"] !== "" || $_POST["krajPodjetja"] !== ""){
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $imePodjetja = $_POST["imePodjetja"];
        $krajPodjetja = $_POST["krajPodjetja"];

        $sql = "INSERT INTO podjetje (naziv, mesto) VALUES ('$imePodjetja', '$krajPodjetja')";
        if (mysqli_query($conn, $sql)) {
            echo "Uspelo";
        } else {
            echo "Napaka: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }   else {
        echo "Prazna forma preveri se enkrat";
    }


}
?>
</body>
</html>
