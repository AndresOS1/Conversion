$(document).ready(function(){
    
    $('#select-pais').on('change', valorMoneda);

    
});

let valorMoneda = 0;

function getValueInput() {
    let valor = document.getElementById("cantidad").value; 
    // document.getElementById("valueInput").innerHTML = inputValue; 
    alert(valor)


}

function valorMoneda(){

    let id_moneda = $(this).val();
    alert(id_moneda);
 

    $.get('/api/moneda/'+id_moneda+'', function(data){

        for(let i=0; i<data.length; i++){

            console.log(data[i]);
            // valorMoneda = data[i].valor_usd;
            // console.log(valorMoneda);
        }
        
    })
}
  


