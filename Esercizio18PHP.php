<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:blue">
    
    <?php 

    $films = ["AMERICAN PSYCHO" , "IL SOLDATO RYAN" , "SNIPER" , "GORIZIA" , "MATTEO NEGRI CLUB", "LA TRISTE VITA DI GORI"];

    echo "<h1 style='color:yellow; text-align:center'>UCI LUXE CINEMAS CAMPI BISENZIO</h1>";

    echo "<select name='filmpreferito'>";


    foreach ($films as $film) {
        echo "<option>{$film}</option>";
    }
    
    
   echo "</select>";


?>

</body>
</html>