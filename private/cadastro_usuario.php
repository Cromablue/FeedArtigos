<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastrar Usuário</h1>
    </header>
    <form action="processar_cadastro_usuario.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>
        <!-- Adicione os outros campos do usuário aqui -->
        <input type="submit" value="Cadastrar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>
