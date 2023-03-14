const lampAcender = document.getElementById('lampAcender');
const lampApagar = document.getElementById('lampApagar');
const imgLAmp = document.getElementById('imgLamp');



// verificar status da lampada 

function estaQuebrada() {
    return imgLAmp.src.indexOf('quebrada') > -1;
}


function acender() {
    if (!estaQuebrada()) {
        imgLAmp.src = './img/acessa.jpg';
    } else {
        alert("Lampada quebrada, Trocar!")
    }

}

function apagar() {
    if (!estaQuebrada()) {
        imgLAmp.src = './img/apagada.jpg';
    } else {
        alert("Lampada quebrada, Trocar!")
    }
}

function quebrar() {
    if (!estaQuebrada()) {
        imgLAmp.src = './img/quebrada.jpg';
    } else {
        alert("Lampada quebrada, Trocar!")
    }

}

lampAcender.addEventListener('click', acender);
lampApagar.addEventListener('click', apagar);
// passar o mouse e acender a lampada 
imgLAmp.addEventListener('mouseover', acender);
imgLAmp.addEventListener('mouseleave', apagar);
imgLAmp.addEventListener('dblclick', quebrar);
