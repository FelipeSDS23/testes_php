<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu sistema</title>
    <style>
        .input-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Cadastro de pessoa</h1>
        <form action="index.php" method="post">
            <div class="input-container">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-container">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade">
            </div>
            <div class="input-container">
                <label for="altura">Altura:</label>
                <input type="number" name="altura" id="altura" step="0.01">
            </div>
            <div class="input-container">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>