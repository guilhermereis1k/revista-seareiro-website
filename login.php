<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Login | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="bg-row">
        <div class="row">
            <div class="login">
                <div class="login__form">
                    <h2 class="heading-2 login__form-heading">Login</h2>
                    <form action="#">

                        <div class="login__campo">
                            <label for="email">E-mail</label>
                            <input type="text" id="login-email" name="email" placeholder="email@email.com.br" required>
                        </div>

                        <div class="login__campo">
                            <label for="login-senha">Senha</label>
                            <input type="password" id="login-senha" name="nome" placeholder="Sua senha" required>
                            

                            <div class="cadastro__mostrar-senha">
                                <input type="checkbox"  onclick="mostrarSenhaLogin()" id="mostrar-senha">Mostrar senha
                            </div>
                            <a href="recuperar-senha.php" class="login__esqueci">Esqueci minha senha</a>
                        </div>
                    
                        <input type="submit" class="btn mg-bottom-4 login__button" value="Entrar">
                    </form>
                </div>
            
                <div class="login__descricao">
                    <div class="login__descricao-texto">
                        <h2 class="heading-2">Ainda não assinou?</h2><br>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Vestibulum faucibus felis odio, nec aliquet tellus venenatis eget. Quisque id purus vel turpis posuere euismod volutpat id tortor.</p><br>
                        <a href="cadastro.php" class="btn login__button" >Assinar agora</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    
    <script src="js/checkbox-senha.js"></script>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
