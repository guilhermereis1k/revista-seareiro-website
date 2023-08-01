<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Cadastro | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="bg-row">
        <div class="row">
            <div class="cadastro">
                <div class="cadastro__form">
                    <h2 class="heading-2 cadastro__form-heading">Cadastro</h2>
                    <form action="#">

                        <div class="cadastro__campo">
                            <label for="cadastro-nome">Nome completo</label>
                            <input type="text" id="cadastro-nome" name="nome" placeholder="Seu nome" required>
                        </div>

                        <div class="cadastro__campo">
                            <label for="cadastro-cpf">CPF</label>
                            <input type="text" id="cadastro-cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required>
                        </div>

                        <div class="cadastro__campo">
                            <label for="email">E-mail</label>
                            <input type="text" id="cadastro-email" name="email" placeholder="email@email.com.br" required>
                        </div>

                        <div class="cadastro__campo">
                            <label for="cadastro-telefone-celular">Telefone celular</label>
                            <input type="tel" id="cadastro-telefone-celular" name="cel-tel" placeholder="(99) 9999-9999" required>
                        </div>

                        <div class="cadastro__campo">
                            <label for="cadastro-telefone-fixo">Telefone fixo</label>
                            <input type="tel" id="cadastro-telefone-fixo" name="fix-tel" placeholder="(99) 9999-9999">
                        </div>

                        <div class="cadastro__campo">
                            <label for="cadastro-senha">Senha</label>
                            <input type="password" id="cadastro-senha" name="nome" placeholder="Sua senha" required>
                            
                            <div class="cadastro__mostrar-senha">
                                <input type="checkbox"  onclick="mostrarSenhaCadastro()" id="mostrar-senha">Mostrar senha
                            </div>
                        </div>

                        <div class="cadastro__campo">
                            <label for="cadastro-senha-conf">Confirme a senha</label>
                            <input type="password" id="cadastro-senha-conf" name="confsenha" placeholder="Confirme sua senha" required>
                        </div>
                    
                        <input type="submit" class="btn mg-bottom-4 cadastro__button" value="Criar conta">
                    </form>
                </div>
            
                <div class="cadastro__descricao">
                    <img src="img/seareiro-cadastro.jpg" alt="">
                    <div class="cadastro__descricao-texto">
                        <h2 class="heading-2 descricao-heading">Assinatura Anual</h2><br>
                        <h2 class="heading-2">R$ 84,90/ano</h2><br>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Vestibulum faucibus felis odio, nec aliquet tellus venenatis eget. Quisque id purus vel turpis posuere euismod volutpat id tortor.</p>
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
