const edicaoRevista = document.getElementsByClassName('revista-edicao');
const anoRevista = document.getElementsByClassName('revista-ano');
const containerRevista = document.getElementsByClassName('revistas__revista');

const sel = document.getElementById('revistas-filtro');
const opt = document.getElementById('revistas-opcao');

const todasRevistasEdicao = [];
const todasRevistas = [];

const verOpcao = () => {
    console.log(sel.value)

    switch (sel.value) { 
        case "edicao":
            filtrarEdicao ();
            break;
        case "ano":
            filtrarAno ();
            break;
    }
}


// Filtrar por edição

const filtrarEdicao = () => {

    for (let i = 0; i < containerRevista.length; i++) {
        const revista = [];

        revista.push(edicaoRevista[i].innerText);
        revista.push(containerRevista[i])

        todasRevistas.push(revista);
    }

    const arraySortida = todasRevistas.sort((a,b) => a[0] - b[0]);

    for (let j = 0; j < arraySortida.length; j++) {
        let contadorOrder = 1 + j;

        contadorOrder.toLocaleString();

        arraySortida[j][1].style.order = contadorOrder;

        console.log(contadorOrder)
    }

}

const filtrarAno = () => {
    
    for (let i = 0; i < containerRevista.length; i++) {
        const revista = [];

        revista.push(edicaoRevista[i].innerText);
        revista.push(containerRevista[i])
        revista.push(anoRevista[i].innerText);

        todasRevistasEdicao.push(revista);
    }

    const arraySortidaEdicao = todasRevistasEdicao.sort((a,b) => a[0] - b[0]);
    
    const arraySortida = arraySortidaEdicao.sort((a,b) => a[2] - b[2]);

    for (let n = 0; n < arraySortida.length; n++) {
        let contadorOrder = 1 + n;
        contadorOrder.toLocaleString();

        arraySortida[n][1].style.order = contadorOrder;
    }
}

export default verOpcao;
export default filtrarAno;
export default filtrarEdicao;