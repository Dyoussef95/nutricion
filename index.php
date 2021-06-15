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
                <div class="col-1">
                    <p>= (10 *</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Peso[kg]" name="peso" id="peso" onchange="calcularTMB();">
                </div>
                <div class="col">
                    <p>) + (6,25 *</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Altura[cm]" name="altura" id="altura" onchange="calcularTMB();">
                </div>
                <div class="col">
                    <p>) - (5 *</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Edad[años]" name="edad" id="edad" onchange="calcularTMB();">
                </div>
                <div class="col">
                    <p>) + 5 =</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" name="TMB" id="TMB" disabled>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>FAC</h5>
                </div>
                <div class="col-1">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" placeholder="FAC" name="fac">
                </div>
                <div class="col">
                    <p>*</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" name="TMB-FAC" id="TMB-FAC" disabled>
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" disabled name="FAC">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>METS</h5>
                </div>
                <div class="col-1">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" placeholder="rango" name="rangoMets">
                </div>
                <div class="col">
                    <p>* 0,0175 *</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="peso" name="pesoMets">
                </div>
                <div class="col">
                    <p>*</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="min" name="minMets">
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" disabled name="METS">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>GCT</h5>
                </div>
                <div class="col-1">
                    <p>=</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="TMB" name="TMB-GCT" id="TMB-GCT" disabled>
                </div>
                <div class="col">
                    <p>+</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="FAC" name="FAC-GCT" disabled>
                </div>
                <div class="col">
                    <p>+</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="METS" name="METS-GCT" disabled>
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" disabled name="GCTparcial">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" disabled name="GCTparcial">
                </div>
                <div class="col">
                    <p>+</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Super/Def" name="variacion">
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" disabled name="GCT">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-1">
                    <h5>GCT(sin entrenar)</h5>
                </div>
                <div class="col-1">
                    <p>=</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="TMB" name="TMB-GCTse" id="TMB-GCTse" disabled>
                </div>
                <div class="col">
                    <p>+</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="FAC" name="FAC-GCTse" disabled>
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" disabled name="GCTseparcial">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" disabled name="GCTseparcial">
                </div>
                <div class="col">
                    <p>+</p>
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Super/Def" name="variacionse">
                </div>
                <div class="col">
                    <p>=</p>
                </div>
                <div class="col-2">
                    <input type="text" class="form-control" disabled name="GCTse">
                </div>
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