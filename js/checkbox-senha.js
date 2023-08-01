const mostrarSenhaCadastro = () => {
    let x = document.getElementById("cadastro-senha");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

const mostrarSenhaLogin = () => {
    let x = document.getElementById("login-senha");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}




