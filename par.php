<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    <h2>Informe dois números inteiros</h2>
    <form action="" method="POST">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>
        
        <button type="submit">Exibir Números Pares</button>
    </form>
    
    <?php
   if ($_SERVER{"REQUEST_METHOD"}=="POST"){

    $num1 = interval($_POST[$num1])
    $num2 = interval($_POST[$num2])

    if ($num1 > $num2){
        list ($num1, $num2) = array ($num2, $num1) 
    }

    for($i = $num1 )
   }





    ?>
</body>
</html>