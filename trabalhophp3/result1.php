<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result 1</title>
</head>
<body>
    <div>
        <h1>Resultado Soma</h1>
        <?php
        $num1 = $_POST ["valor1"];
        $num2 = $_POST ["valor2"];
        $calcular = $num1 + $num2;

            if ($calcular>10){
                echo "O resultado é: ". ($calcular +8);
            } if ($calcular <=10){
                echo "O resultado é: ". ($calcular-5);
            }
        ?>
    </div>
</body>
</html>