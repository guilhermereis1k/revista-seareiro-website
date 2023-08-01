<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Home | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="row">
        <div class="principal--1">
            <div class="principal__texto--1">
                <h1 class="principal__heading--1 heading-1 mg-bottom-4">Conheça a Revista Seareiro</h1>
                <p>Aliquam erat volutpat. Nulla accumsan quis enim sit amet tempus. Morbi euismod aliquet maximus. 
Cras congue sem nec ligula elementum, at volutpat risus cursus. In hac habitasse platea dictumst. Fusce lacus nisl, congue in augue tempor, accumsan faucibus ipsum. Fusce sed venenatis diam. Nunc suscipit iaculis egestas. Fusce velit quam, iaculis vitae odio fermentum, semper lobortis dui.
                </p>
            </div>
            <div class="principal__image-box--1">
                <img class="principal__image--1" src="img/PRIMEIRO-BANNER.png" alt="Banner principal">
            </div>
        </div>
        <div class="principal--2">
            <div class="principal__image-box--2">
                <img class="principal__image--2" src="img/SEGUNDO-BANNER.png" alt="Banner principal">
            </div>
            <div class="principal__texto--2">
                <h1 class="principal__heading--2 heading-1 mg-bottom-4">Assine a Revista Seareiro e tenha acesso ao banco de dados da publicação no formato eBook</h1>
                <p>Sua assinatura anual dá direito a seis edições em formato eBook e PDF, com acesso por login e senha nos dispositivos fixos ou móveis.
                </p>
                <div class="principal__preco">
                    <span>Por apenas</span>
                    <h1 class="heading-1 preco-heading">R$ 80,00 / Ano</h1>
                    <span class="preco-descricao">Você estuda a Doutrina Espírita e ajuda a Seara Bendita em seus trabalhos sociais.</span>
                </div>
                <a href="cadastro.php" class="principal__button--2">Assinar agora</a>
            </div>
        </div>
    </main>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
