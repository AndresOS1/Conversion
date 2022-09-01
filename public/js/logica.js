$(document).ready(function () {
    $('#select-pais').on('change', valorMoneda);
});

let valueGlobal = 0

function getValueInput() {       
    let valor = document.getElementById("cantidad").value;
    let resultado = valor * valueGlobal;    
    document.getElementById("resultado").innerHTML = resultado;    
}

function valorMoneda() {
    let id_moneda = $(this).val();
    var valorMonedaUsd = 0
    $.get('/api/moneda/' + id_moneda + '', function (data) {
        for (let i = 0; i < data.length; i++) {
            console.log(data[i]);
            valorMonedaUsd = data[i].valor_usd;
        }
        valueGlobal= valorMonedaUsd       
    })
}