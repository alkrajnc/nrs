<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaja 9</title>

    <style>
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-70%, -50%);
            display: flex;
            flex-direction: column;
        }
        a{
            text-decoration: none;
            color: white;
            font-size: 5rem;
            transition: 150ms all ease;
            margin-bottom: 1rem;
        }
        a:hover {
            color: #65d78d;
            transform: translateX(1rem);
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
            <a href="podjetje_vstavi.php">Vstavi pdatke</a>
            <a href="podjetje_izpisi.php">Izpisi podatke</a>
            <a href="podjetje_brisi.php">Izpbrisi podatke</a>
            <a href="podjetje_spremeni.php">Spremeni podatke</a>
    </div>




</body>
</html>