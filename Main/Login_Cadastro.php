<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login & Cadastro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
</head>

<body>

    <div class="card_login">

        <div class="container" id="container" id="form_cadastro">
            <div class="form-container sign-up-container">
                <form action="../controller/controllerCadastro.php" method="POST">
                    <h1>Criar Conta</h1>
                    <input type="text" placeholder="Nome" name="input_name" required />
                    <input type="email" name="input_email" placeholder="Email" required />
                    <input type="password" name="input_password" placeholder="Password" required autocomplete="off" />
                    <button type="submit">Cadastrar</button>
                    <input type="hidden" value="1" name="form_cadastro">
                </form>
            </div>

            <div class="form-container sign-in-container">
                <form action="../controller/controllerLogin.php" method="POST">
                    <h1>Entrar</h1>
                    <input id="email_login" type="email" placeholder="Email" name="input_email" required />
                    <input id="password_login" type="password" placeholder="Senha" name="input_password" required autocomplete="off" />
                    <a href="#">Esqueceu a senha?</a>
                    <button type="submit">Login</button>
                    <input type="hidden" value="1" name="form_login">
                </form>
            </div>


            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bem-Vindo!</h1>
                        <button class="ghost" id="signIn">Login</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Olá</h1>
                        <p>Digite seus dados para cadastrar</p>
                        <button class="ghost" id="signUp">Cadastrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="copyright">© 2025 - Maximus Nascimento</div>

</body>

</html>

<script src="main.js"></script>