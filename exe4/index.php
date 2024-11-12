<!-- Tabuada de um número
Crie um formulário para exibir a tabuada de um número. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de um número</title>
</head>
<body>
    <form method="POST">
        Número: <input type="number" name="numero"><br>
        <button type="submit">Exibir Tabuada</button>    
    </form>
    <?php
        if ($_SERVER["REQUEST_MEHOD"] == "POST"){
            $numero = $_POST["numero"];
            echo "Tabuada de $numero:<br>";
            for ($i = 1; $i <=10; $i++){
                echo "$numero x $i = ". ($numero * $i) . "<br>";
            }
        }
    ?>
</body>
</html>
<!-- A tabuada é exibida usando um laço for, multiplicando o número
fornecido por 1 a 10. -->