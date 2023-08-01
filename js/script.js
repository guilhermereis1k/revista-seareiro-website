const selecaoCartao = document.getElementById("pagamento__forma--cartao")
const selecaoBoleto = document.getElementById("pagamento__forma--boleto");
const selecaoPix = document.getElementById("pagamento__forma--pix");

const conteudoCartao = document.getElementById("pagamento__cartao")
const conteudoBoleto = document.getElementById("pagamento__boleto");
const conteudoPix = document.getElementById("pagamento__pix");

const showCartao = () => {
    selecaoCartao.style.backgroundColor = "#ffffff";
    selecaoCartao.style.color = "#00A4E6";
    selecaoCartao.style.border = "2px solid #00A4E6";

    selecaoBoleto.style.backgroundColor = "#00A4E6";
    selecaoBoleto.style.color = "#ffffff";
    selecaoBoleto.style.border = "none";

    selecaoPix.style.backgroundColor = "#00A4E6";
    selecaoPix.style.color = "#ffffff";
    selecaoPix.style.border = "none";

    conteudoCartao.style.display = "block";
    conteudoBoleto.style.display = "none";
    conteudoPix.style.display = "none";
}

const showBoleto = () => {
    selecaoBoleto.style.backgroundColor = "#ffffff";
    selecaoBoleto.style.color = "#00A4E6";
    selecaoBoleto.style.border = "2px solid #00A4E6";

    selecaoPix.style.backgroundColor = "#00A4E6";
    selecaoPix.style.color = "#ffffff";
    selecaoPix.style.border = "none";

    selecaoCartao.style.backgroundColor = "#00A4E6";
    selecaoCartao.style.color = "#ffffff";
    selecaoCartao.style.border = "none";

    conteudoCartao.style.display = "none";
    conteudoBoleto.style.display = "block";
    conteudoPix.style.display = "none";
}

const showPix = () => {
    selecaoPix.style.backgroundColor = "#ffffff";
    selecaoPix.style.color = "#00A4E6";
    selecaoPix.style.border = "2px solid #00A4E6";

    selecaoCartao.style.backgroundColor = "#00A4E6";
    selecaoCartao.style.color = "#ffffff";
    selecaoCartao.style.border = "none";

    selecaoBoleto.style.backgroundColor = "#00A4E6";
    selecaoBoleto.style.color = "#ffffff";
    selecaoBoleto.style.border = "none";

    conteudoCartao.style.display = "none";
    conteudoBoleto.style.display = "none";
    conteudoPix.style.display = "block";
}