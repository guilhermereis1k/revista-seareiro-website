<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Pagamento | Revista Seareiro</title>
</head>
<body>
<?php include('./components/header.php'); ?>
    <main class="bg-row">
        <div class="row">
            <div class="pagamento">
                <div class="pagamento__form">
                    <h2 class="heading-2 pagamento__form-heading">Pagamento</h2>
                    

                    <div class="pagamento__formas mg-bottom-4">
                        <div onClick="showCartao()" class="pagamento__selecao" id="pagamento__forma--cartao">
                            Cartão de crédito
                        </div>
                        <div onClick="showBoleto()" class="pagamento__selecao" id="pagamento__forma--boleto">
                            Boleto bancário
                        </div>
                        <div onClick="showPix()" class="pagamento__selecao" id="pagamento__forma--pix">
                            PIX
                        </div>
                    </div>

                    <div class="pagamento__cartao" id="pagamento__cartao">

                    <div class="container preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOÃO SILVA</text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">Nome do titular</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">Validade</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">Numero do cartão</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">Valido</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">até</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                        
                                </svg>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">Código de segurança</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">João Silva</text>
                    </g>
                </svg>
                
            </div>
        </div>
    </div>

                        <form action="#">

                            <div class="pagamento__campo">
                                <label for="pagamento-nome-cartao">Nome do titular</label>
                                <input type="text" id="nome-cartao" name="nome-cartao" placeholder="" required>
                            </div>

                            <div class="pagamento__campo">
                                <label for="numero-cartao">Numero do cartão</label>
                                <input type="text" id="numero-cartao" name="numero-cartao" placeholder="" type="text" pattern="[0-9]*" inputmode="numeric" required>
                            </div>

                            <div class="pagamento__campo-conjunto">

                                <div class="pagamento__campo">
                                    <label for="validade-cartao">Validade (mm/aa)</label>
                                    <input type="text" id="validade-cartao" name="validade-cartao" placeholder="" pattern="[0-9]*" inputmode="numeric" required>
                                </div>

                                <div class="pagamento__campo">
                                    <label for="codigo-cartao">Código de segurança</label>
                                    <input type="text" id="codigo-cartao" name="codigo-cartao" placeholder="" pattern="[0-9]*" inputmode="numeric" required>
                                </div>

                            </div>
                        
                            <input type="submit" class="btn mg-bottom-4 pagamento__button" value="Finalizar">
                        </form>

                    </div>

                    <div class="pagamento__boleto" id="pagamento__boleto" style="display: none;">
                        BOLETO
                    </div>

                    <div class="pagamento__pix" id="pagamento__pix" style="display: none;">
                        PIX
                    </div>

                </div>
            
                <div class="pagamento__descricao">
                    <img src="img/seareiro-cadastro.jpg" alt="">
                    <div class="pagamento__descricao-texto">
                        <h2 class="heading-2 descricao-heading">Assinatura Anual</h2><br>
                        <h2 class="heading-2">R$ 84,90/ano</h2><br>
                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Vestibulum faucibus felis odio, nec aliquet tellus venenatis eget. Quisque id purus vel turpis posuere euismod volutpat id tortor.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
    <script src="js/cartao.js"></script>
    <script src="js/script.js"></script>
</body>
<?php include('./components/footer.php'); ?>
<?php include('./components/lgpd.php'); ?>
</html>