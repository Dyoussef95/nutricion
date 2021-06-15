function calcularTMB() {
    peso = document.getElementById('peso').value;
    peso=comprobar(peso);
    altura = document.getElementById('altura').value;
    altura=comprobar(altura);
    edad = document.getElementById('edad').value;
    edad=comprobar(edad);
	//window.alert(edad);
    TMB=(10*peso)+(6.25*altura)-(5*edad)+5;
    document.getElementById('TMB').value=TMB;
    document.getElementById('TMB-FAC').value=TMB;
    document.getElementById('TMB-GCT').value=TMB;
    document.getElementById('TMB-GCTse').value=TMB;
}

function comprobar(valor){
    valor = valor.replace(",",".");
    if(valor == null || valor == undefined || valor == ""){
        valor=0;
    }else{
        valor=parseFloat(valor);
    }

    return valor;
}