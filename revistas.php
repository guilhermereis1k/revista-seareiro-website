<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Revistas | Revista Seareiro</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
</head>
<body>
<?php include('./components/header.php'); ?>

    <div class="revistas__heading">
        <h1 class="heading-1">Revistas</h1>
    </div>
    
    <main class="bg-row">
        <div class="row">
            <div class="revistas__filtro">
                <label for="revistas-filtro">Filtrar por:</label>
                <select name="filtro" id="revistas-filtro" class="revistas__filtro" onchange="verOpcao()">
                <option value="filtrar" disabled selected></option>
                <option value="edicao">Edição</option>
                <option value="ano">Ano</option>
                </select>
                
            </div>
            <div class="revistas__box">
                <div class="revistas__conteudo">
                    <div class="revistas__revista">
                        <h6 class="heading-6">Edição <span class="revista-edicao">172</span> - <span>Mês</span>/<spanspan class="revista-ano">2022</span</h6>
                        <img class="revistas__imagem" src="img/revistas/seareiro_172_capa.jpg" alt="">
                    </div>

                    <!-- ATENTAR PARA O SPAN COM AS INFORMAÇÕES E CLASSES RESPECTIVAS, OS FILTROS FUNCIONAM ENCIMA DELES !-->

                    <div class="revistas__revista">
                        <a href="revista-pagina.php" class="revista__link">
                            <h6 class="heading-6">Edição <span class="revista-edicao">173</span> - <span>Mês</span>/<spanspan class="revista-ano">2021</span></h6>
                            <img class="revistas__imagem" src="img/revistas/seareiro_173_capa.jpg" alt="">
                        </a>
                    </div>

                    <div class="revistas__revista">
                        <h6 class="heading-6">Edição <span class="revista-edicao">189</span> - <span>Mês</span>/<spanspan class="revista-ano">2022</span></h6>
                        <img class="revistas__imagem" src="img/revistas/seareiro_185_capa.jpg" alt="">
                    </div>

                    <div class="revistas__revista">
                        <h6 class="heading-6">Edição <span class="revista-edicao">182</span> - <span>Mês</span>/<spanspan class="revista-ano">2023</span></h6>
                        <img class="revistas__imagem" src="img/revistas/seareiro_182_capa.jpg" alt="">
                    </div>

                    <div class="revistas__revista">
                        <h6 class="heading-6">Edição <span class="revista-edicao">186</span> - <span>Mês</span>/<spanspan class="revista-ano">2022</span></h6>
                        <img class="revistas__imagem" src="img/revistas/capa_186_capa.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="js/revista-dropdown.js"></script>
    <script src="js/revista-filter.js"></script>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
