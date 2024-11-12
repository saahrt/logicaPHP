<!-- Calculando fatorial de um número
Crie um formulário que calcule o fatorial de um número dado. -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando fatorial de um número</title>
</head>
<body>
    <form method="POST">
        Numero: <input type="number" name="numero"><br>
        <button type="submit">Calcular Fatorial</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["numero"];
            $fatorial = 1;
                for($i = 1; $i <= $numero; $i++){
                    $fatorial *= $i;
                }
                echo "Fatorial de $numero é: $fatorial";
        }
    ?>
</body>
</html>
<!-- Utilizamos um laço for para multiplicar todos os números de 1 até o
número fornecido, acumulando o resultado na variável $fatorial. -->