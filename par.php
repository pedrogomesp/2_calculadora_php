<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares</title>
</head>
<body>
    <h2>Informe dois números inteiros</h2>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>
        
        <button type="submit">Exibir Números Pares</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);
        
        if ($num1 > $num2) {
            list($num1, $num2) = array($num2, $num1);
        }
        
        echo "<h3>Usando for:</h3><p>";
        for ($i = $num1; $i <= $num2; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
        echo "</p>";
        
        echo "<h3>Usando while:</h3><p>";
        $i = $num1;
        while ($i <= $num2) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
            $i++;
        }
        echo "</p>";
        
        echo "<h3>Usando do-while:</h3><p>";
        $i = $num1;
        if ($i % 2 !== 0) $i++;
        do {
            if ($i <= $num2) {
                echo $i . " ";
                $i += 2;
            }
        } while ($i <= $num2);
        echo "</p>";
    }
    ?>
</body>
</html>
