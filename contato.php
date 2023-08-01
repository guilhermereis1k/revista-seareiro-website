<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Contato | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="bg-row">
        <div class="row">
            <div class="contato">
                <div class="contato__form">
                    <h2 class="heading-2 contato__form-heading">Contato</h2>
                    <form action="#">

                        <div class="contato__campo">
                            <label for="contato-nome">Nome</label>
                            <input type="text" id="contato-nome" name="nome" placeholder="Seu nome aqui" required>
                        </div>

                        <div class="contato__campo">
                            <label for="contato-email">E-mail</label>
                            <input type="text" id="contato-email" name="email" placeholder="email@email.com.br" required>
                        </div>

                        <div class="contato__campo">
                            <label for="contato-tel">Telefone</label>
                            <input type="text" id="contato-tel" name="tel" placeholder="(XX) XXXX-XXXX" required>
                        </div>

                        <div class="contato__campo">
                            <label for="contato-mensagem">Mensagem</label>
                            <textarea name="contato-mensagem" id="contato-mensagem" cols="30" rows="10" required></textarea>
                        </div>

                        
                        <input type="submit" class="btn mg-bottom-4 contato__button" value="Enviar">
                    </form>
                </div>
            
        </div>
        </div>
    </main>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
