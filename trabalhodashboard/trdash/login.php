<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dashboard</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <section class="login-container">
        <div>
            <h2>Login</h2>
            <div class="login-email">
                <label for="email">E-mail: </label>
                <input type="email" id="email" name="email" placeholder="E-mail" required>
            </div>

            <div class="login-senha">
                <label for="senha">Senha: </label>
                <input type="password" id="senha" name="senha"  placeholder="Senha" required>
            </div>
            <button type="submit">Entrar</button>
        </div>
    </section>
</body>
</html>