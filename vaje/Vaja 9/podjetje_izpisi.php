<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Izpis</title>
    <link href="../../fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../../fontawesome/css/brands.css" rel="stylesheet">
    <link href="../../fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <style>
        table, td{
            border: 1px solid #313349;
        }
        td{
            background-color: #29343b;
            color: aliceblue;
            width: 10rem;
        }
        table{
            background-color: rgba(101, 215, 141, 0.4);
            padding: 0.2rem;
            box-shadow:  0 0.8rem 1rem 0.3rem rgba(41, 52, 59, 0.46);
        }
        .container{
            display: grid;
            gap: 1rem;
            margin: 1rem;
        }
        h2{
            text-align: center;
        }

    </style>
</head>
<body>
<div class="header">
    <a href="./index.php"><i class="fa-regular fa-circle-left"></i></a>
</div>

<div class="container">
<?php
function izpisPodjetje ($result) {
    echo "<h2>Podjetja: </h2>";
    echo "<table>";
    echo "<tr><th>Id Podjetja</th><th>Naziv Podjetja</th><th>Mesto</th></tr>";
    while($row = mysqli_fetch_assoc($result[0])) {
        echo  "<tr>". "<td>" .  $row["id_podjetje"] . "</td>" . "<td>" . $row["naziv"] . "</td>" . "<td>" . $row["mesto"]. "</td>" . "</tr>";
    }
    echo "</table>";
}
function izpisDelavec ($result) {
    echo "<h2>Delavci: </h2>";
    echo "<table>";
    echo "<tr><th>Id Delavec</th><th>Ime</th><th>Izobrazba</th><th>Placa</th></tr>";
    while($row = mysqli_fetch_assoc($result[1])) {
        echo  "<tr>". "<td>" .  $row["id_delavec"] . "</td>" . "<td>" . $row["ime"] . "</td>" . "<td>" . $row["izobrazba"]. "</td>" . "<td>" . $row["placa"]. "</td>" . "</tr>";
    }
    echo "</table>";
}
function izpisProjekt ($result) {
    echo "<h2>Projekti: </h2>";
    echo "<table>";
    echo "<tr><th>Id Projekta</th><th>Naziv</th><th>Sredstva</th></tr>";
    while($row = mysqli_fetch_assoc($result[2])) {
        echo  "<tr>". "<td>" .  $row["id_projekt"] . "</td>" . "<td>" . $row["naziv"] . "</td>" . "<td>" . $row["sredstva"]. "</td>" . "</tr>";
    }
    echo "</table>";
}
function izpisSodeluje ($result) {
    echo "<h2>Sodelovanje: </h2>";
    echo "<table>";
    echo "<tr><th>Funkcija</th><th>Datum</th></tr>";
    while($row = mysqli_fetch_assoc($result[3])) {
        echo  "<tr>". "<td>" .  $row["funkcija"] . "</td>" . "<td>" . $row["datum_nastopa"] . "</td>" . "</tr>";
    }
    echo "</table>";
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delavec_projekt";
$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = array("SELECT * FROM podjetje", "SELECT * FROM delavec", "SELECT * FROM projekt", "SELECT * FROM sodeluje");
$result = array();


for ($i = 0; $i < 4 ; $i++) {
    // $result[$i] = mysqli_query($conn, $sql[$i]);
    $result[] = mysqli_query($conn, $sql[$i]);
    if (!mysqli_query($conn, $sql[$i])) {
        echo "Napaka: " . $sql[$i] . "<br>" . mysqli_error($conn);
    }
}
izpisPodjetje($result);
izpisDelavec($result);
izpisProjekt($result);
izpisSodeluje($result);



mysqli_close($conn);

?>
</div>
</body>
</html>



