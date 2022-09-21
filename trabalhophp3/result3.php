<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result 3</title>
</head>
<body>
    <div>
        <h1>Cadastro</h1>
        <?php
            $nome= $_POST["nome"];
            $genero=$_POST["genero"];
            $idade= $_POST["idade"];

            if($idade<25){
                echo "Informe seus dados: $nome, $idade, $genero. Você não pode se cadastrar.";
            }else{
                echo "Informe seus dados: $nome, $idade, $genero. Você não pode se cadastrar";
            }
    
        ?>
    </div>
</body>
</html>