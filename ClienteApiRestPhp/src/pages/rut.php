<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <title>Web Service Rest</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top p-3 aria-label">
        <div class="container">
            <a class="navbar-brand" href="../../index.php" style="color: white;">Web Service REST</a>
            <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                        <a class="nav-link" href="../../index.php" style="text-align: center; color: white;">Inicio </a>
                    </li>
                   
                    <a href="../../src/pages/nombre.php" class="btn btn-outline-light px-2" style="text-align: center; max-width: 850px;">Ingresar un nombre completo</a>

                </ul>
            </div>
        </div>
    </nav>

    <section id="formu" style="color: white;">
        <div class="container border border-info bg-info mt-5 py-5 text-center ">
            
            <h1 class="text-center">Validar Digito Verificador</h1>
            <h1 class="divider3 mx-5"></h1>
            <div class="formulario pt-5" >
             
                <form action="rut.php" name="formulario1" method="POST" autocomplete="off">    
                    <?php
                         
                        echo '<input type="text" class="input" name="rutD" id="nombre" placeholder="Ingrese rut">
                            <input class="btn" type="submit" name="enviar" value="Aceptar">';

                        $constante = '<div class="mensaje">';        
                        $constante2 = '</div>';

                        echo '<div> SUGERENCIA: Ingrese un rut separado por un " - " de su digito verificador. Ejemplo: 11222333-4 </div>';
                        echo 'Si existiera un error, intente nuevamente asegurandose de ingresar el rut como en el ejemplo';

                        if(isset($_POST['enviar'])){    
                           
                           $rut_ingresado= $_POST['rutD'];
                    
                           if($rut_ingresado == null || ctype_digit($rut_ingresado) ){
                           echo '<div class="mensaje">Datos ingresados incorrectamente o no hay datos ingresados !</div>';
                           echo $rut_ingresado;
                           }
                           else if( ctype_alpha($rut_ingresado) ){
                            echo '<div class="mensaje">Datos ingresados incorrectamente !</div>';
                            echo $rut_ingresado;
                           }
                           else{
                            
                            $parametros=parse_ini_file("../../private.ini"); //se parametriza la URL
                            $url=$parametros['RutURL'].$rut_ingresado; //se concatena strings para crear la url que se conectara con la api rest
                            $data = json_decode(file_get_contents($url));
                            //imprime el resultado de la funcion o metodo rut
                            echo $constante.$data.$constante2;
                            echo $rut_ingresado;
                           }
                          
                        }
                        

                    ?> 
                </form>
                
            </div>
        </div>
    </section>
  
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/c8152ea011.js" crossorigin="anonymous"></script>

</html>
