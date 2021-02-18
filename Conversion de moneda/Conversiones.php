<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de divisas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
    <form action="" method="post" style="padding:3cm; paddign-left:5cm" >
        <div class="container-sm" id="contenedor">
            <div class="form-row">
                <div class="col-sm-7">
                    <h4>Bienvenido a la calculadora de conversiones</h4>
                </div>
            </div>
             <div class="form-row">
                <div class="col-sm-3">
                    <label for="studentN">Ingrese la cantidad a convertir: </label> 
                </div>
                 <div class="col-sm-3">
                     <input class="form-control" type="text" name="dinero" id="cantidad" placeholder="Ingrese cantidad">
                     <br>
                 </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="conversion">Seleccione su moneda</label>
                </div>
                <div class="col-sm-3">
                    <select class="form-control form-control-sm" name="monedaO" id="MonedaConvertir">
                        <option value="Dolar">Dolar Estadounidense</option>
                        <option value="Euro">Euro</option>
                        <option value="Yen">Yen Japones</option>
                        <option value="Libra">Libra Esterlina</option>
                    </select>
                     <br>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <label for="conversion">Seleccione la moneda a convertir</label>
                </div>
                <div class="col-sm-3">
                    <select class="form-control form-control-sm" name="monedaC" id="MonedaConvertir">
                    <option value="Dolar">Dolar Estadounidense</option>
                    <option value="Euro">Euro</option>
                    <option value="Yen">Yen Japones</option>
                    <option value="Libra">Libra Esterlina</option>
                    </select>
                </div>
                    <br>
            </div>
            <div class="form-row">
                <div class="col-sm-3">
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Convertir Moneda</button>
                </div>
            </div>
                <br>
        
        </div>
                        <?php
                            //Inportamos archivo de validaciones php
                            include("calculo.php");

                        ?>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        
</body>

</html>
