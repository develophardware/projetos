const calcular = document.getElementById("calcular");


// ----- DEBUG

// window.alert("OLA MUNDO!");


function calc() {
    const peso = document.getElementById("peso").value;
    const altura = document.getElementById("altura").value;
    let resposta = document.getElementById("resposta");
    let retorno;

    //VALIDAR ENTRADAS

    if ((peso !== "") && (altura !== "")) {
        retorno = peso / (altura * altura);

        resposta.textContent = `Valor do IMC: ${retorno.toFixed(2)}`;


    } else {
        resposta.textContent = "Preencha todos os campos";
    }


}


calcular.addEventListener("click", calc);