<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Minha conta | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
        <main class="minha-conta">
        <h1 class="heading-1 minha-conta__heading mg-bottom-4">Minha conta</h1>
            <div class="minha-conta-row">

                    <form action="#">

                        <div class="minha-conta--1">

                        <h2 class="heading-2 minha-conta__dados-heading mg-bottom-4">Meus dados</h2>

                        <div class="minha-conta__vazio">
                            &nbsp;
                        </div>

                        <div class="minha-conta__campo">
                            <label for="mudar-nome">Nome completo</label>
                            <input type="text" class="minha-conta__info" id="mudar-nome" name="nome" placeholder="Seu nome completo aqui" >
                        </div>        

                        <div class="minha-conta__campo">
                            <label for="mudar-email">E-mail da conta</label>
                            <input type="email" class="minha-conta__info" id="mudar-email" name="email" placeholder="email@email.com.br" >
                        </div>        

                        <div class="minha-conta__campo">
                            <label for="mudar-tel-cel">Telefone celular</label>
                            <input type="tel" class="minha-conta__info" id="mudar-tel-cel" name="tel-cel" placeholder="(XX) XXXX-XXXX">
                        </div>        

                        <div class="minha-conta__campo">
                            <label for="mudar-tel-fixo">Telefone fixo</label>
                            <input type="tel" class="minha-conta__info" id="mudar-tel-fixo" name="tel-fixo" placeholder="(XX) XXXX-XXXX">
                        </div>        
                    
                        <div class="minha-conta__campo">
                            <label for="mudar-senha">Alterar senha da conta</label>
                            <input type="password" class="minha-conta__info mg-bottom-2" id="mudar-senha" name="senha" >
                            <div class="cadastro__mostrar-senha">
                                <input type="checkbox"  onclick="mostrarSenhaMinhaConta()" id="mostrar-senha">Mostrar senha
                            </div>
                        </div>        

                        <div class="minha-conta__campo">
                            <label for="mudar-senha-conf">Confirmar nova senha</label>
                            <input type="password" class="minha-conta__info" id="mudar-senha-conf" name="senha-conf" required>
                        </div>
                
                </div>
 
                <div class="minha-conta--2 mg-bottom-4">

                    <h2 class="heading-2 minha-conta__dados-heading mg-bottom-4">Assinatura</h2>

                    <div class="minha-conta__vazio">
                            &nbsp;
                    </div>
                    
                    <div class="minha-conta__campo ">
                        <h3 class="minha-conta__info-heading heading-3">Vigência da assinatura de: </h3>
                        <div class="minha-conta__cartao-info">**/**/**** até **/**/****</div>
                        <a href="#popup-assinatura-cancelada" class="minha-conta__atualizar"  id="cancelar-assinatura" onClick="showCancelada()">Cancelar assinatura</a>
                    </div>

                    <div class="minha-conta__campo">
                        <h3 class="minha-conta__info-heading heading-3">Cartão atual</h3>
                        <div class="minha-conta__cartao-atual">VISA   **** **** **** 9999</div>
                        <a href="alterar-cartao.php" class="minha-conta__atualizar">Alterar cartão</a>
                    </div>

                    <input type="button" class="btn minha-conta__button" value="Atualizar">
                    <!- ATUALIZA A PÁGINA COM NOVOS DADOS ->

                </div>

                </form>
            </div>

            <div id="minha-conta__fundo-escurecido">
                <div class="minha-conta__assinatura-cancelada" id="popup-assinatura-cancelada" style="display: none;">
                <h2 class="heading-2 minha-conta__dados-heading mg-bottom-4" style="text-align: center;">Sua assinatura foi cancelada com sucesso</h2><br>
                <a href="" class="btn">Fechar</a>
                </div>
            </div>
            
        </main>

    <script>
        const mostrarSenhaMinhaConta = () => {
            let x = document.getElementById("mudar-senha");
            let y = document.getElementById("mudar-senha-conf");

            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

            if (y.type === "password") {
                y.type = "text";
            } else {
                y.type = "password";
            }
        }
    </script>
    <script src="js/cancelar-assinatura.js"></script>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>
