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
            gap: 1rem
        }
    </style>
</head>
<body>
    
        
        <?php 
        $var = $_POST["numofstr"];
        echo '<form action="form2.php?num=' , $var, '" method="post">';
        echo "<div>";
        for ($i=0; $i < $_POST["numofstr"]; $i++) { 
            echo "<label>Niz " . $i + 1;
            echo "<input type=\"text\" name=\"hash" . $i . "\">";
            echo "</label>";
        }
        
        ?>
        <input type="submit" value="Submit">
        </div>
    </form>
</body>
</html>