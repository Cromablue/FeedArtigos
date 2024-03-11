<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Artigo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastrar Artigo</h1>
    </header>
    <form action="processar_cadastro_artigo.php" method="post">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br>
        <!-- Adicione os outros campos do artigo aqui -->
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
