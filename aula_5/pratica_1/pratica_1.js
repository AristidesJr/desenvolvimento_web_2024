

const operador = ['+', '-', 'x', '÷'];

function addNumero(oAcao) {
    let iValor = oAcao.innerHTML;

    if(iValor == 0) {
        document.getElementById('display').innerHTML = iValor
    }
    else {
        document.getElementById('display').innerHTML += iValor
    }
}

function addOperacao(oAcao) {
    let iValor = oAcao.value;
    let sDisplay = document.getElementById('display').innerHTML;

    let sUltimaLetra = iDisplay.slice(-1);

    if(operador.includes(sUltimaLetra)) {

    }

}