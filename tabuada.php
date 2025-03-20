<!DOCTYPE html>
<html>
<head>
    <title>Tabuada em PHP</title>
</head>
<body>
    <h2>Calcular Tabuada</h2>
    <form method="post" action="">
        <label for="numero">Digite um número inteiro:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    echo "<h3>Tabuada do número $numero usando 'for'</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
    }

    echo "<h3>Tabuada do número $numero usando 'while'</h3>";
    $i = 1;
    while ($i <= 10) {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    }

    echo "<h3>Tabuada do número $numero usando 'do-while'</h3>";
    $i = 1;
    do {
        echo "$numero x $i = " . ($numero * $i) . "<br>";
        $i++;
    } while ($i <= 10);
}
?>

</body>
</html>