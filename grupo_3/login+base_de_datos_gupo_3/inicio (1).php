

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="row">
            <div class="col col-md-3">
                <img src="https://uploads.turbologo.com/uploads/design/hq_preview_image/265395/draw_svg20210813-28345-1j5ohc.svg.png"
                    width="210" height="200" alt="">
                    <style>


h1{
    color: rgba(182, 13, 13, 0.526);
    }
    .formulario{
    background-color: rgb(207, 190, 225);
    border: solid 2px rgb(202, 97, 115);
    border-radius: 10px;
    
    }
    footer{
    background: rgba(239, 77, 239, 0.405);
    }
    header{
    background: rgb(239, 190, 147);
    }
    
    .row{
        line-height: 20px;
        padding:6px 0px 5px 6px ;
    }
                    </style>
            </div>
            <div class="col col-md-9">
                <center>
                    <h1>BIENVENIDOS A GAMEPLACE</h1><br><h4>grupo 3</h4>
                </center>
            </div>
        </div>
        <div class="col col-md-9">
a

        </div>
    </header>

   
    <div class="container">
        <div class="row">
            
            <div class="col">
                <form action="proceso.php" method="post" class="formulario f1 f2" id="formali">
                    <div class="row">
                        <div class="col">
                            <img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2019/09/generador-de-nombres-de-usuario.png"
                                width="110" height="100" alt="">
                        </div>
                        <div class="col">

                            <i>
                                <h1>Login</h1>
                            </i>

                            <div>
                            </div>
                        </div>
                        
                        <div class="row">

                            <label for="">Usuario:
                                <input type="email" name="email" id="email">
                            </label>
                        </div>
                        <div class="row">
                            <label for="">Password:
                                <input type="password" name="contra" id="contra">
                            </label>
                        </div>
                        <div>
                            <button>Iniciar Sesion</button>
                            
                        </div>
                </form>
            </div>
        </div>

    </div>
    </main>

    <div>

        <footer>
            derechos reservados fundamentos@yavirac.edu.ec
        </footer>
    </div>



</body>

</html>