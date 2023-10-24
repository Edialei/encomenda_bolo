<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomende seu bolo</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <div class="box">
            <h1>Monte o seu bolo </h1>
            <br>
            <form action="processar_formulario2.php" method="POST">
                <div class="inputBox">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required><br><br>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" name="idade" min="18" max="100"><br><br>

                    <label for="tamanho">Tamanho do bolo:</label>
                    <select id="tamanho" name="tamanho">
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                    </select><br><br>

                    <label for="mensagem">Observações para o bolo</label>
                    <textarea id="mensagem" name="mensagem" rows="4" cols="50"></textarea><br><br>

                    <fieldset>
                        <legend>Recheio</legend>
                        <label for="chocolate">
                            <input type="radio" id="opcao1" name="opcoes" value="Chocolate"> Chocolate
                        </label><br>
                        <label for="morango">
                            <input type="radio" id="opcao2" name="opcoes" value="Morango"> Morango
                        </label><br>
                        <label for="doce-de-leite">
                            <input type="radio" id="opcao3" name="opcoes" value="Doce de leite"> Doce de leite
                        </label><br>
                        <label for="bem-casado">
                            <input type="radio" id="opcao4" name="opcoes" value="Bem-casado"> Bem-Casado
                        </label><br>
                    </fieldset><br><br>

                    <datalist id="acompanhamento">
                        <option value="Biscoito">
                        <option value="KitKat">
                        <option value="Trento">
                        <option value="Paçoca">
                        <option value="Côco">
                        <option value="Limão">
                        <option value="Jujuba">
                    </datalist>
                    <label for="acompanhamento">Escolha um acompanhamento:</label>
                    <input list="acompanhamento" id="acompanhamento" name="acompanhamento"><br><br>

                    <output for="cobertura">Cobertura:<span id="idadeOutput"></span></output><br>

                    <select id="cobertura" name="cobertura">
                        <optgroup label="Opções de Cobertura">
                            <option value="Chantilly">Chantilly</option>
                            <option value="Brigadeiro">Brigadeiro</option>
                            <option value="Creme">Creme</option>
                        </optgroup>
                    </select>
                    <br><br>
                    <button type="submit">Enviar</button><br><br>
                </div>
            </form>
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