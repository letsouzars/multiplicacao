<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora da Multiplicação eba</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Núm 1: <input type="text" name="num1"><br><br>
        <input type="submit" value="Multiplique">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['num1'])) {
            $num = $_POST['num1'];

            $resultado = $num * 6;

            echo "<h3>O resultado da multiplicação de $num por 6 é: $resultado</h3>";
        } else {
            echo "<h3>Preencha o campo com um número.</h3>";
        }
    }
    ?>
</body>
</html>