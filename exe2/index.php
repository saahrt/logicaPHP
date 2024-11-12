<!-- Calculadora de idade
Crie um formulário para calcular a idade com base no ano de nascimento. -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de idade</title>
</head>
<body>
    <form method="POST">
        Ano de Nascimento: <input type="number" name="anoNasc"><br>
        <button type="submit">Calculadora de idade</button>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $anoNasc = $_POST["anoNasc"];
            $anoAtual = date("Y");
            $idade = $anoAtual - $anoNasc;
            echo "Sua idade é: ". $idade;
        }
    ?>
</body>
</html>
<!-- Utilizamos a subtração entre o ano atual e o ano de nascimento para
calcular a idade. -->