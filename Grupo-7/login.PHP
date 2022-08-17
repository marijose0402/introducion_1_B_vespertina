login.PHP

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GR7</title>
<link rel="stylesheet" href="style.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div>
        <div class="container">
            <form action="proceso.php"  method="post" class="was-validated">
                <div class="mb3-mt-3">
                    <br><br>
                    <label for="email" class="form-label">usuario:</label>
                    <input type="email" class="form-control" name="email" id="email"
                        placeholder="Ingrese su correo electrónico" required>
                </div>
                <div class="mb3-mt-3">
                    <br>
                    <label for="pwd" class="form-label">contraseña:</label>
                    <input type="password" class="form-control" name="pwd" id="pwd"
                        placeholder="Ingrese su contraseña"  maxlength="8" size="8" required>
                </div>
             <br>               
                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <style type="text/css">

        body {
            padding-left: 5em;
            padding-right: 5em;
            padding-top: 2em;
            color: rgb(7, 7, 7);
            background-color: #aff191b2;
            font-family: Georgia, "Times New Roman";
        }

        #boton{
            margin-left: 7em;
        }
    </style>
   
</html>
