<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-items: center;
        }
    </style>
</head>
<body>
    


    <div>
        <?php 
        for ($i=0; $i < $_GET["num"]; $i++) { 
            $num = "hash" . $i;
            $temp = $_POST[$num];
            echo "<p>Zgoščena vrednost za besedilo " . "<b>" . $temp . "</b>" . " je " . "<b>" . md5($temp) . "</b></p>";
        }
        ?>
    </div>

</body>
</html>