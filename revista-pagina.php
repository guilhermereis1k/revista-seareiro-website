<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Página da revista | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>

    <div class="pagina-revista__heading">
        <h1 class="heading-1">Revista N°<span>185</span> - <span>Jan</span>/<span>2023</span></h1>
    </div>
    
    <main class="bg-row">
        <div class="row">
            <div class="pagina-revista__box">
                <div class="pagina-revista__imagem">
                    <img src="img/revistas/seareiro_185_capa.jpg" alt="">
                </div>
                <div class="pagina-revista__direita">
                    <div class="pagina-revista__texto">
                        <p>
                        <span>Resumo:</span>
                        Q uisque id posuere dui. Morbi est ipsum, lacinia eu lacus nec, varius euismod justo. Mauris et consectetur nunc. Nulla sodales erat at lacus dictum, id condimentum urna hendrerit. Nam viverra bibendum turpis in congue. Morbi ac massa luctus, venenatis tellus nec, elementum quam. Aliquam nulla dolor, molestie et nisl eget, fringilla interdum ligula. Praesent ullamcorper tellus nibh, quis tincidunt eros scelerisque ac. Duis vel ultricies elit, eget auctor enim. Cras sapien mauris, facilisis id urna sit amet, vestibulum suscipit neque. Etiam eleifend imperdiet nisi ut vestibulum. Curabitur velit tortor, rhoncus eu diam eu, pulvinar blandit odio. Curabitur gravida tempus turpis, in aliquam nulla.
                        </p>
                    </div>
                    <div class="pagina-revista__botoes">
                        <a href="#" class="btn pagina-revista__button">Ler em eBook</a>
                        <a href="#" class="btn pagina-revista__button">Ler em PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
