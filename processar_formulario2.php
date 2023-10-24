<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomenda completa</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <div class="container">
            <h1>Dados do Formulário</h1>
            <br><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
                $email = isset($_POST["email"]) ? $_POST["email"] : "";
                $idade = isset($_POST["idade"]) ? $_POST["idade"] : "";
                $tamanho = isset($_POST["tamanho"]) ? $_POST["tamanho"] : "";
                $mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : "";
                $opcoes = isset($_POST["opcoes"]) ? $_POST["opcoes"] : "";
                $acompanhamento = isset($_POST["acompanhamento"]) ? $_POST["acompanhamento"] : "";
                $cobertura = isset($_POST["cobertura"]) ? $_POST["cobertura"] : "";

                echo "<p>Nome: $nome</p>";
                echo "<p>E-mail: $email</p>";
                echo "<p>Idade: $idade</p>";
                echo "<p>Gênero: $tamanho</p>";
                echo "<p>Mensagem: $mensagem</p>";
                echo "<p>Recheio selecionado: $opcoes</p>";
                echo "<p>Acompanhamento selecionado: $acompanhamento</p>";
                echo "<p>Cobertura selecionada: $cobertura</p>";
            }
            ?>
        </div>

    </main>
    <footer>
        <h3>Desenvolvido por:</h3>
        <ul>
            <li>Eduardo Gama</li>
            <li>Roberval Junior</li>
            <li>Fernando Kauã</li>
            <li>Lucas Gabriel</li>
            <li>Pabllo Firmino</li>
        </ul>
    </footer>
</body>

</html>