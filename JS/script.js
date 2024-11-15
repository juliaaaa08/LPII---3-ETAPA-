
function cep(){
    c1 = document.pag.ceporiginal.value;
    c2 = document.pag.cepduplicado.value;

    if(c1 != c2){
        document.getElementById('msg').style.display = "block";
    }
    else{
        document.getElementById('msg').style.display = "none";
    }
    
}

function mascara_cpf(obj){

    if(obj.value.length == 3){
        obj.value += "."
    }
    else if(obj.value.length == 7){
        obj.value += "."
    }
    else if(obj.value.length == 11){
        obj.value += "-"
    }

}



function mascara_tel(obj){
    if(obj.value.length == 0){
        obj.value += "("
    }
    else if(obj.value.length == 3){
        obj.value += ")"
    }
    else if(obj.value.length == 9){
        obj.value += "-"
    }
}

function salto(campo,digito){
    if(campo == "cpf"){
        if(digito.length>13){
            document.pag.telefone.focus();
        }
    }
    

    if(campo == "telefone"){
        if(digito.length>13){
            document.pag.pagamento.focus();
        }
    }

}

function abrir(){
    pagamento = document.pag.pagamento.value;
    if(pagamento == "Cartão"){
        document.getElementById('cartao').style.display = "block";
        document.pag.num.focus();
    }
    else{
        document.getElementById('cartao').style.display = "none";
    }

    if(pagamento == "Pix"){
        document.getElementById('pix').style.display = "block";
        document.pag.num.focus();
    }
    else{
        document.getElementById('pix').style.display = "none";
    }

}

function somente_numero(e){ 
    tecla = (window.event) ? event.keyCode:e.wich; //captura o digitio e de evento

    if((tecla >= 48 && tecla <= 57) || /*ou*/  (tecla >= 96 && tecla <= 105 ) || (tecla == 8) || (tecla == 37) || (tecla == 39) || (tecla == 46) ){
        return true;
    } else{
        return false;
    }
}