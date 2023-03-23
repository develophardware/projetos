const lamp = document.getElementById('lampOnOf');
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

function lampOnOf() {
    if (lamp.textContent == 'Ligar') {
        acender();
        lamp.textContent = 'Desligar';
        lamp.classList.remove('btn btn-outline-success');

    } else {
        apagar();
        lamp.textContent == 'Ligar';

        lamp.classList.add('btn btn-outline-danger');

    }
}

lamp.addEventListener('click', lampOnOf);
// passar o mouse e acender a lampada 
imgLAmp.addEventListener('mouseover', acender);
// tirar o mouse e apagar a lampada
imgLAmp.addEventListener('mouseleave', apagar);
// Duplo click para quebrar a lampada 
imgLAmp.addEventListener('dblclick', quebrar);