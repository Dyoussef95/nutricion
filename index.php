<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Nutricion</title>
</head>

<body>

    <div class="container">
        <h1>Calculo de requerimiento</h1>
        <form>
            <div class="row">
                <div class="col-1">
                    <h5>TMB</h5>
                </div>
                <div class="col-auto">
                    = (10 *
                
                    <input type="text" placeholder="Peso[kg]" name="peso" id="peso" onchange="calcularTMB();">
                
                    ) + (6,25 *
                
                    <input type="text" placeholder="Altura[cm]" name="altura" id="altura" onchange="calcularTMB();">
                
                    ) - (5 *
                
                    <input type="text" placeholder="Edad[años]" name="edad" id="edad" onchange="calcularTMB();">
                
                    ) + 5 =
                
                    <input type="text" name="TMB" id="TMB" disabled>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>FAC</h5>
                </div>
                <div class="col-auto">
                    =
                    <input type="text" placeholder="FAC" name="fac" id="fac" onchange="calcularFAC();">
            
                    *
                
                    <input type="text" name="TMB-FAC" id="TMB-FAC" disabled placeholder="TMB">
                
                    =
               
                    <input type="text" disabled name="FAC" id="FAC">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>METS</h5>
                </div>
                <div class="col-auto">
                    =
               
                    <input type="text" placeholder="rango" name="rangoMets" id="rangoMets" onchange="calcularMETS();">
                
                    * 0,0175 *
                
                    <input type="text" placeholder="peso" name="pesoMets" id="pesoMets" onchange="calcularMETS();">
                
                    *
               
                    <input type="text" placeholder="min" name="minMets" id="minMets" onchange="calcularMETS();">
                
                    =
                
                    <input type="text" disabled name="METS" id="METS">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>GCT</h5>
                </div>
                <div class="col-auto">
                    =
                
                    <input type="text" placeholder="TMB" name="TMB-GCT" id="TMB-GCT" disabled>
           
                    +
                
                    <input type="text" placeholder="FAC" name="FAC-GCT" id="FAC-GCT" disabled>
                
                    +
               
                    <input type="text" placeholder="METS" name="METS-GCT" id="METS-GCT" disabled>
                
                    =
                
                    <input type="text" disabled name="GCTparcial" id="GCTparcial1">
               
                    +
            
                    <input type="text" placeholder="Super/Def" name="variacion" id="variacion" onchange="calcularGCT();">
           
                    =
               
                    <input type="text" disabled name="GCT" id="GCT">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-auto">
                    <h5>GCT(sin entrenar)</h5>
                </div>
                <div class="col-auto">
                    =
                
                    <input type="text" placeholder="TMB" name="TMB-GCTse" id="TMB-GCTse" disabled>
               
                    +
              
                    <input type="text" placeholder="FAC" name="FAC-GCTse" disabled id="FAC-GCTse">
                
                    =
                
                    <input type="text" disabled name="GCTseparcial" id="GCTseparcial1">
                
                    +
                
                    <input type="text"  placeholder="Super/Def" name="variacionse" id="variacionse" onchange="calcularGCTse();">
                
                    =
               
                    <input type="text" disabled name="GCTse" id="GCTse">
                </div>
                <br>
            </div>
        </form>
    </div>


    <script src="./operaciones.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>