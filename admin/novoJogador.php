<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1>Novo Imovel</h1>
    <form action="confirmaNovoTipoImovel.php" method="post">
        <div class="mb-3">
            <label for="imovel" class="form-label">Imovel</label>
            <input type="text" class="form-control" id="imovel" name="nomeImovel">
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Posição</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" checked type="radio" name="tipoGenero" id="inlineRadio1" value="apartamento">
            <label class="form-check-label" for="inlineRadio1">Guarda-Redes</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoGenero" id="inlineRadio2" value="moradia">
            <label class="form-check-label" for="inlineRadio2">Moradia</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="tipoGenero" id="inlineRadio3" value="terreno" >
            <label class="form-check-label" for="inlineRadio3">Terreno</label>
        </div>


        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
    </form>
</div>
<!--
    <div class="container">
        <div class="row">
            <div class="col-md-4 bg-primary w-100">
                <span>texto</span>
            </div>
            <div class="col-md-4 bg-primary w-100">
                <span>texto</span>
            </div>
            <div class="col-md-4 bg-primary w-100">
                <span>texto</span>
            </div>
        </div>
    </div>
-->
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>