

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema BPA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="vivenciar_logov2.png" alt="Logo Vivenciar">
        </div>

    </header>

    <div class="new-appointment" style="max-width: 500px;">
        <h2>BPA SIMPLIFICADO - VIVENCIAR</h2>

        <!-- Mensagens de erro ou sucesso podem ser exibidas aqui -->

        <form method="POST" action="login.php" style="flex-direction: column;">
            <div class="form-group" style="width: 100%;">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" autofocus>
            </div>
            
            <div class="form-group" style="width: 100%;">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password">
            </div>
            
            <button type="submit" class="btn-add" style="margin-top: 30px;">Entrar</button>
        </form>
    </div>

    <footer style="text-align: center; margin-top: 50px; color: #6c63ff; font-size: 14px;">
        <p>&copy; 2025 Sistema BPA. Todos os direitos reservados.</p>
    </footer>
</body>
</html>