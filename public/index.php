<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>QR-Generator</title>
    <script src="../js/funcs.js"></script>
</head>
<body style="background: #5dc1b9">
    <div class="row justify-content-center">
        <h1 class="font-weight-bold">QR-Generator</h1>
    </div>
    <br>
    <div class="container mt-3">
        <div class="d-flex justify-content-center h-100">
            <div class="card" style="width:28rem;">
                <div class="card-header">
                    <h3><i class="fas fa-qrcode mr-2"></i>New QR Code</h3>
                </div>
                <div class="card-body">
                    <form id="f1" method="POST" action="../src/generator.php">
                        <div class="input-group form-group mt-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" style="width:2.5rem;"><i class="fas fa-link"></i></span>
                            </div>
                            <input type="text" class="form-control" name="url" id="direccion" placeholder="URL, text..." required>
                        </div>
                        <div class="input-group form-group row justify-content-center">
                            <div class="input-group-prepend">
                            <a class='btn btn-info text-white rounded' id="Enviar" onclick="enviar($('direccion').val());return false;"><i class='fas fa-qrcode mr-2'></i>Generate QR Code</a>
                            </div>
                            <div class="input-group-prepend ml-3">
                                <input type="reset" class="btn btn-danger text-white rounded" value="Clean Fields">
                            </div>
                        </div>
                        <div class="input-group form-group row justify-content-center">
                            <div class="input-group-prepend">
                                <p hidden class="text-info mb-4 font-weight-bold" id="youQr">Your QR Code</p>
                            </div>
                        </div>
                        <div class="input-group form-group mt-1 row justify-content-center">
                            <div class="input-group-prepend" id="respuesta">
                            </div>
                        </div>
                        <div class="input-group form-group row justify-content-center">
                            <div class="input-group-prepend">
                                <a hidden class="btn btn-warning mt-5 rounded text-white" id="cleanQR" onclick="oculta();"><i class="fas fa-trash mr-3"></i>Delete QR</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>