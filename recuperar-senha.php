<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Recuperar senha | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="bg-row">
        <div class="row">
            <div class="recuperar-senha">
                <div class="recuperar-senha__form">
                    <h2 class="heading-2 recuperar-senha__form-heading">Recupere sua senha</h2>
                    <form action="#">

                        <div class="recuperar-senha__campo">
                            <label for="recuperar-senha-email">Insira o e-mail da conta</label>
                            <input type="text" id="recuperar-senha-email" name="email" placeholder="email@email.com.br" required>
                        </div>
                    
                        <input type="submit" class="btn mg-bottom-4 recuperar-senha__button" value="Recuperar senha">
                        <!- MANDAR PARA PÁGINA RECUPERAR-SENHA-ENVIADO ->
                    </form>
                </div>
            
        </div>
        </div>
    </main>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
