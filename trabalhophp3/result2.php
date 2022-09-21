<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result 2</title>
</head>
<body>
    <div>
        <h1>Resultado Decrescente</h1>
        <?php
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $valor3 = $_POST["valor3"];
        $abc=array ($valor1, $valor2, $valor3);
        rsort($abc);
        foreach ($abc as $abc){
        echo "A ordem descrecente dos números é: $abc <br>";}
        ?>
    </div>
</body>
</html>