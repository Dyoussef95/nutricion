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

function calcularFAC(){
    fac = document.getElementById('fac').value;
    fac=comprobar(fac);
    TMBfac = document.getElementById('TMB-FAC').value;
    TMBfac=comprobar(TMBfac);
    FAC=fac*TMBfac;
    document.getElementById('FAC').value=FAC;
    document.getElementById('FAC-GCT').value=FAC;
    document.getElementById('FAC-GCTse').value=FAC;
}

function calcularMETS(){
    rango = document.getElementById('rangoMets').value;
    rango=comprobar(rango);
    peso = document.getElementById('pesoMets').value;
    peso=comprobar(peso);
    min = document.getElementById('minMets').value;
    min=comprobar(min);
    METS=rango*peso*min*0.0175;
    document.getElementById('METS').value=METS;
    document.getElementById('METS-GCT').value=METS;
    calcularGCTparcial();
}

function calcularGCTparcial(){
    TMB=document.getElementById('TMB-GCT').value;
    TMB=comprobar(TMB);
    FAC=document.getElementById('FAC-GCT').value;
    FAC=comprobar(FAC);
    METS=document.getElementById('METS-GCT').value;
    METS=comprobar(METS);
    GCT=TMB+FAC+METS;
    document.getElementById('GCTparcial1').value=GCT;
    GCTse=TMB+FAC;
    document.getElementById('GCTseparcial1').value=GCTse;
    
}

function calcularGCT(){
    GCTpar=document.getElementById('GCTparcial1').value;
    GCTpar=comprobar(GCTpar);
    variacion=document.getElementById('variacion').value;
    variacion=comprobar(variacion);
    GCT=GCTpar+variacion;
    document.getElementById('GCT').value=GCT;
    
}

function calcularGCTse(){
    GCTpar=document.getElementById('GCTseparcial1').value;
    GCTpar=comprobar(GCTpar);
    variacion=document.getElementById('variacionse').value;
    variacion=comprobar(variacion);
    GCT=GCTpar+variacion;
    document.getElementById('GCTse').value=GCT;
    
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