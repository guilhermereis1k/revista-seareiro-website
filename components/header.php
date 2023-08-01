<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Header</title>
</head>

<body>
    <header class="header">
        <a href="index.php">
            <img class="header__logo" src="img/Seara-bendita-logo.jpg" alt="Logo Seara Bendita"></a>
        <div class="contatos">
            <div class="contatos__email">
                <div class="contatos__email-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                    </svg>
                </div>
                <a href="#" class="contatos__email-texto">
                    contato@searabendita.org.br</a>
            </div>
            <div class="contatos__telefone">
                <svg class="info-phone__icon" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                </svg>
                <a href="#" class="contatos__telefone-texto">(11) 5534-5172</a>
            </div>
            <div class="contatos__contato">
                <svg class="info-mail__icon" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path
                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                </svg>
                <a href="contato.php" class="contatos__contato-texto">Contato</a>
            </div>
        </div>
        <nav class="menu">
            <div class="menu__item">
                <a href="login.php">Login</a>
            </div>
            <div class="menu__item">
                <a href="cadastro.php">Cadastro</a>
            </div>
            <!--<div class="menu__item">
                <a href="minha-conta.php">Minha conta</a>
            </div>
            <div class="menu__item">
                <a href="revistas.php">Revistas</a>
            </div>!-->

            <!-- DESATIVAR LOGIN E CADASTRO, E ATIVAR MINHA CONTA E REVISTAS CONFORME LOGIN DO USUÁRIO !-->

        </nav>

        <div class="navigation">
            <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

            <label for="navi-toggle" class="navigation__button">
                <span class="navigation__icon">&nbsp;</span>
            </label>

            <div class="navigation__background">&nbsp;</div>

            <nav class="navigation__nav">
                <ul class="navigation__list">
                    <li class="navigation__item"><a href="minha-conta.php" class="navigation__link">Minha conta</a></li>
                    <li class="navigation__item"><a href="revistas.php" class="navigation__link">Revistas</a></li>

                    <!-- DESATIVAR LOGIN E CADASTRO, E ATIVAR MINHA CONTA E REVISTAS CONFORME LOGIN DO USUÁRIO !-->

                    <li class="navigation__item"><a href="login.php" class="navigation__link">Login</a></li>
                    <li class="navigation__item"><a href="cadastro.php" class="navigation__link">Cadastro</a></li>
                    <li class="navigation__item"><a href="contato.php" class="navigation__link">Contato</a></li>
                </ul>
            </nav>
        </div>

        <div class="midias-sociais">
            <a href="https://web.facebook.com/searabenditaoficial?_rdc=1&_rdr" target="_blank">
                <span class="midias-sociais__circulo">
                    <svg width="73" height="135" viewBox="0 0 73 135" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_59_299-978604)">
                            <path
                                d="M22.52 134.96C20.86 134.3 20.35 133.05 20.35 131.32C20.39 113.52 20.39 95.7233 20.35 77.93V76.2H3.55C0.999999 76.2 0 75.28 0 72.72V51.93C0 49.49 1 48.52 3.47 48.51H20.34V46.98C20.34 41.62 20.23 36.26 20.44 30.91C20.74 23.16 22.99 16.06 28.2 10.11C32.7802 4.71422 39.2769 1.30811 46.32 0.61C52.76 -0.04 59.32 0.16 65.79 0H69.87C71.87 0.07 72.87 1.08 72.87 3V23C72.87 25 71.78 26 69.69 26C65.08 26.07 60.46 26 55.86 26.21C53.43 26.31 51.08 27.01 49.86 29.41C49.2601 30.6267 48.9195 31.9548 48.86 33.31C48.74 38.31 48.86 43.23 48.86 48.4H68.4C71.11 48.4 72.05 49.33 72.05 52.04V72.6C72.05 75.16 71.11 76.09 68.55 76.09H48.85V130.99C48.85 132.72 48.43 134.09 46.76 134.85L22.52 134.96Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_59_299-978604">
                                <rect width="72.87" height="134.96" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </a>
            <a href="https://www.instagram.com/searabenditaoficial/?r=nametag" target="_blank">
                <span class="midias-sociais__circulo">
                    <svg width="136" height="136" viewBox="0 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_59_309-649765)">
                            <path
                                d="M34.56 0H100.47C101.85 0.22 103.25 0.36 104.61 0.67C119.9 4.11 129.71 13.37 133.9 28.48C134.45 30.48 134.65 32.48 135.01 34.54V100.45C134.92 100.92 134.87 101.45 134.75 101.86C133.84 105.37 133.41 109.1 131.91 112.35C125.19 126.91 113.63 134.69 97.58 134.92C77.58 135.2 57.51 135 37.47 134.98C29.8504 135.09 22.3936 132.772 16.18 128.36C5.45 120.71 0.0700049 110.18 0.0400049 97C-0.00666178 77.3133 -0.00666178 57.6467 0.0400049 38C0.0106625 35.4351 0.251998 32.8743 0.760005 30.36C4.13 15.07 13.43 5.36 28.51 1.11C30.47 0.56 32.54 0.36 34.56 0ZM11.99 67.49V96.75C11.9196 99.829 12.3797 102.897 13.35 105.82C17.16 116.5 26.35 123 37.96 123C57.64 123 77.33 123.06 97.01 122.95C99.9787 122.953 102.93 122.497 105.76 121.6C116.56 117.96 122.99 108.6 123 96.94C123 77.31 123.07 57.67 123 38.03C123.008 35.0511 122.552 32.089 121.65 29.25C118.03 18.51 108.76 12 97.13 12C77.41 11.9467 57.6867 11.9467 37.96 12C29.11 12 21.96 15.5 16.7 22.67C13.4819 27.1735 11.8276 32.6072 11.99 38.14C11.99 47.9067 11.99 57.69 11.99 67.49Z"
                                fill="black" />
                            <path
                                d="M67.54 102.28C60.66 102.286 53.9328 100.252 48.2087 96.4349C42.4847 92.6179 38.0209 87.1895 35.3817 80.8359C32.7424 74.4823 32.0463 67.4888 33.3812 60.7396C34.7162 53.9904 38.0223 47.7885 42.8815 42.9181C47.7408 38.0476 53.935 34.7273 60.6812 33.3768C67.4273 32.0264 74.4223 32.7064 80.782 35.3311C87.1417 37.9557 92.5803 42.407 96.4104 48.1222C100.241 53.8375 102.29 60.5601 102.3 67.44C102.305 72.01 101.41 76.5363 99.6663 80.7604C97.9223 84.9846 95.3634 88.8238 92.1356 92.059C88.9078 95.2942 85.0745 97.862 80.8543 99.6157C76.6342 101.369 72.11 102.275 67.54 102.28ZM90.3 67.52C90.3059 63.0126 88.9751 58.6046 86.4759 54.8535C83.9766 51.1024 80.4211 48.1767 76.2591 46.4463C72.097 44.7159 67.5153 44.2586 63.0933 45.1321C58.6713 46.0056 54.6077 48.1708 51.4163 51.3539C48.2249 54.5369 46.049 58.5948 45.1638 63.0145C44.2786 67.4342 44.7239 72.017 46.4433 76.1836C48.1628 80.3502 51.0791 83.9134 54.8236 86.4225C58.5681 88.9317 62.9726 90.2741 67.48 90.28C73.5227 90.2827 79.3195 87.8875 83.5979 83.6203C87.8763 79.3531 90.2868 73.5627 90.3 67.52Z"
                                fill="black" />
                            <path
                                d="M103.76 22.6C105.491 22.602 107.182 23.1171 108.62 24.0802C110.057 25.0433 111.177 26.4111 111.838 28.0108C112.498 29.6104 112.669 31.3699 112.33 33.0668C111.99 34.7638 111.155 36.3219 109.93 37.5442C108.705 38.7666 107.145 39.5981 105.447 39.9338C103.75 40.2695 101.99 40.0942 100.392 39.4301C98.7942 38.766 97.4289 37.6429 96.4691 36.2029C95.5093 34.7629 94.998 33.0706 95 31.34C95.0132 29.0226 95.941 26.8042 97.5815 25.1674C99.222 23.5306 101.443 22.6079 103.76 22.6Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_59_309-649765">
                                <rect width="135.01" height="135.07" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </a>
            <a href="https://www.youtube.com/channel/UCurw4OZ6T6eXHvinzMaDLlQ" target="_blank">
                <span class="midias-sociais__circulo">
                    <svg width="131" height="93" viewBox="0 0 131 93" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_59_307-511663)">
                            <path
                                d="M130.82 26.08V62.89C130.74 63.42 130.61 63.96 130.58 64.5C130.396 68.7972 129.615 73.0479 128.26 77.13C127.412 79.7173 126.028 82.0967 124.198 84.1128C122.368 86.1288 120.133 87.7362 117.64 88.83C113.315 90.6494 108.69 91.6497 104 91.78C99.28 92.03 94.55 92.08 89.82 92.09C70.4867 92.09 51.1533 92.0667 31.82 92.02C25.9281 92.129 20.0696 91.1107 14.56 89.02C10.0381 87.3284 6.27562 84.0664 3.96 79.83C1.52873 75.1465 0.259706 69.9469 0.26 64.67C0.02 53.98 0 43.32 0 32.6C0 28.39 0.2 24.17 0.5 19.97C0.702 16.5587 1.66924 13.2366 3.33 10.25C6.12 5.32 10.7 3.12 15.87 1.81C21.3831 0.512295 27.0372 -0.0890606 32.7 0.0199969H95.85C101.94 -0.130064 108.028 0.399882 114 1.6C117.786 2.27153 121.326 3.93468 124.26 6.42C127.96 9.79 129.4 14.23 130.07 19C130.39 21.32 130.58 23.72 130.82 26.08ZM50.33 45.51V58.92C50.33 63.21 53.41 65.11 57.19 63.14L83.31 49.51C85.03 48.62 86.22 47.39 86.2 45.37C86.18 43.35 85.03 42.2 83.35 41.37C74.59 36.8433 65.8367 32.3 57.09 27.74C53.47 25.87 50.34 27.8 50.33 31.88C50.32 36.4 50.33 40.95 50.33 45.51Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_59_307-511663">
                                <rect width="130.82" height="92.09" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </span>
            </a>
        </div>
    </header>
</body>

</html>