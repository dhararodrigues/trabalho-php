<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result 4</title>
</head>
<body>
    <div>
        <h1>Leitura do Número</h1>
        <?php
        $num= $_POST["numero"];

            if ($num==1){
                echo "Mês de janeiro";
            } if ($num==2){
                echo "Mês de fevereiro";
            } if ($num==3){
                echo "Mês de março";
            } if ($num==4){
                echo "Mês de abril";
            } if ($num==5){
                echo "Mês de maio";
            } if ($num==6){
                echo "Mês de junho";
            } if ($num==7){
                echo "Mês de julho";
            } if ($num==8){
                echo "Mês de agosto";
            } if ($num==9){
                echo "Mês de setembro";
            } if ($num==10){
                echo "Mês de outubro";
            } if ($num==11){
                echo "Mês de novembro";
            } if ($num==12){
                echo "Mês de dezembro";
            }
        ?>
    </div>
</body>
</html>