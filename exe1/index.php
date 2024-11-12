<!-- Verificar número par ou impar
 Crie um formulário que peça um número e informe se ele é par ou ímpar. -->

 <!DOCTYPE html>
 <html lang="pt-BR">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar número par ou ímpar</title>
 </head>
 <body>
    <form method="POST">
        Numero: <input type="number" name="numero"><br>
        <button type="submit">Verificar</button>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero = $_POST["numero"];
            if($numero % 2 == 0){
                echo "$numero é par";
            } else {
                echo "$numero é ímpar";
            }
        }
    ?>
 </body>
 </html>
 <!-- Utilizamos a lógica do operador % (módulo) para verificar se o número é
divisível por 2. Se o resultado for zero, o número é par; caso contrário, é ímpar. -->