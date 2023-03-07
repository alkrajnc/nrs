<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Izpisemo, shranimo, uporabimo v novi funkciji</li>
        <li>strstr: Vrne del niza, ki se začne od in vključno s prvim pojavom niza do konca niza v katerem ga iscemo.
            <ol>
                <li>3 parametri</li>
                <li>string string bool</li>
                <li>Vrne string ali pa false</li>
            </ol>

        </li>
        <li>md5: Skalkulira md5 hash vrednost niza in ga vrne
            <ol>
                <li>2 parametra</li>
                <li>string bool</li>
                <li>Vrne string</li>
            </ol>
        </li>
    </ul>
<?php 
    echo strtr("beseda", ["bes"]);
    echo "<br>";
    echo "Danes: " . md5("Danes");
?>
    <form action="form.php" method="post">
        <input type="number" name="numofstr" id="">
        <input type="submit" value="Submit">
    </form>
    <form action="cet.php" method="post">
        <input type="text" name="str0" id="">
        <input type="text" name="str1" id="">
        <input type="checkbox" name="" id="">
        <input type="checkbox" name="">
        <input type="submit" value="">
    </form>
</body>
</html>