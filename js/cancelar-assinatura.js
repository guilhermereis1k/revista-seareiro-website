const popupCancelada = document.getElementById("popup-assinatura-cancelada");
const fundoCancelada = document.getElementById("minha-conta__fundo-escurecido");

const showCancelada = () => {
    popupCancelada.style.display = "flex";
    fundoCancelada.style.display = "block";
}

window.onclick = function(event) {
    if (event.target === fundoCancelada) {
      popupCancelada.style.display = "none";
      fundoCancelada.style.display = "none";
    }
}