<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicio 3</title>
</head>
<body>
    <div>
        <h1>Exercicío 3A</h1>
        <form action="result1.php" method="post">
            Número 1:<input type="number" name="valor1">
            <p></p>
            Número 2 <input type="number" name="valor2">
            <p></p>
            <input type="submit" value="Calcular">
        </form>
    </div>
    <div>
        <h1>Exercício 3B</h1>
        <form action="result2.php" method="post">
            Número 1:<input type="number" name="valor1">
            <p></p>
            Número 2 <input type="number" name="valor2">
            <p></p>
            Número 3 <input type="number" name="valor3">
            <p></p>
            <input type="submit" value="Imprimir Decrescente">
        </form>
    </div>
    <div>
        <h1>Exercício 3C</h1>
        <form action="result3.php" method="post">
            Nome: <input type="text" name="nome">
            <p></p>
            Gênero: <input type="text" name="genero">
            <p></p>
            Idade: <input type="number" name="idade" >
            <p></p>
            <input type="submit" value="Enviar" >
        </form>
    </div>
    <div>
        <h1>Exercício 3D</h1>
        <h2>Digite um número entre 1 e 12</h2>
        <form action="result4.php" method="post" >
            número: <input type="number" name="numero">
            <p></p>
            <input type="submit" name="enviar">
        </form>
    </div>
</body>
</html>