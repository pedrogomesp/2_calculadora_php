<?php
function is_prime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function list_primes_for($num) {
    $primes = [];
    for ($i = 2; $i <= $num; $i++) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

function list_primes_while($num) {
    $primes = [];
    $i = 2;
    while ($i <= $num) {
        if (is_prime($i)) {
            $primes[] = $i;
        }
        $i++;
    }
    return $primes;
}

function list_primes_do_while($num) {
    $primes = [];
    $i = 2;
    do {
        if (is_prime($i)) {
            $primes[] = $i;
        }
        $i++;
    } while ($i <= $num);
    return $primes;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número Primo</title>
</head>
<body>
    <form method="post">
        <label for="number">Digite um número inteiro:</label>
        <input type="number" name="number" id="number" required>
        <button type="submit">Verificar</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);
        echo "<h2>O número $num é ". (is_prime($num) ? "primo" : "não primo") .".</h2>";
        
        echo "<h3>Números primos até $num (usando for):</h3>";
        echo implode(", ", list_primes_for($num));
        
        echo "<h3>Números primos até $num (usando while):</h3>";
        echo implode(", ", list_primes_while($num));
        
        echo "<h3>Números primos até $num (usando do-while):</h3>";
        echo implode(", ", list_primes_do_while($num));
    }
    ?>
</body>
</html>
