<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laboratorios AID</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/image.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="brand">UEM Escuela de Arquitectura, Ingeniería y Diseño.</div>
    <div class="address-bar"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Main</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">Libre Acceso</a>
                    </li>
                     <li>
                        <!-- Cambiar enlace -->
                        <a href="software.php">Software</a>

                    </li>
                    <li>
                        <a href="http://projectbasedschool.universidadeuropea.es/">ProjectBasedSchool</a>
                    </li>
                    <li>
                        <a href="https://campusvirtual.uem.es/moodle/login/index.php">Moodle</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
            <div class="row">
                <div class="box">
                <div class="col-lg-12 text-center">
                    <div>
                    <h2 style="text-align:center"> Listado de Software </h2>
                    </div>
                    
                    <form class="form-horizontal">
                    <fieldset>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="software">Software</label>  
                      <div class="col-md-4">
                      <input id="software" name="software" type="text" placeholder="" class="form-control input-md">
                        
                      </div>
                    </div>

                    <!-- Select Multiple -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="titulacion">Titulacion</label>
                      <div class="col-md-4">
                        <select id="titulacion" name="titulacion" class="form-control" multiple="multiple">
                          <option value="1">Grado en Ingeniería Aeroespacial en Aeronaves</option>
                          <option value="2">Grado en Ingeniería de la Energía</option>
                          <option value="3">Grado en Ingeniería en Electrónica Industrial y Automática</option>
                          <option value="4">Grado en Organización Industrial</option>
                          <option value="5">Grado Ingenieria Mecanica</option>
                          <option value="6">Grado en Ingeniería Civil</option>
                          <option value="7">Grado en Videojuegos</option>
                          <option value="8">Ingeniero Industrial</option>
                          <option value="9">Grado en Ingeniería Biomédicaa</option>
                          <option value="10">Grado en Ingeniería Informática</option>
                          <option value="11">Grado en Ingeniería de Sistemas de Telecomunicación</option>
                        </select>
                      </div>
                    </div>

                    <!-- Select Multiple -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="area">Area</label>
                      <div class="col-md-4">
                        <select id="area" name="area" class="form-control" multiple="multiple">
                          <option value="1">Aeronautica</option>
                          <option value="2">Industrial</option>
                          <option value="3">Civil</option>
                          <option value="4">Videojuegos</option>
                          <option value="5">Biomedica</option>
                          <option value="6">Telecomunicaciones</option>
                          <option value="7">Arquitectura</option>

                        </select>
                      </div>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="buscar"></label>
                      <div class="col-md-4">
                        <button id="buscar" name="buscar" class="btn btn-primary">Buscar</button>
                      </div>
                    </div>

                    </fieldset>
                    </form>



                    <table class="table">
                        <thead>
                          <tr>
                            <td><strong>Software</strong></td>
                            <td><strong>Enlace</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                        <?php

                            $link = mysqli_connect("127.0.0.1","root","","web_uem");
                            $link->query("SELECT DISTINCT`PROGRAMA` FROM `enlace_software`");
                            $numerofilas=$link->affected_rows;

                            for($i=1; $i <= $numerofilas; $i++) {
                              $resultado=$link->query("SELECT * FROM `enlace_software` WHERE `enlace_software_id`='$i'");
                              $row=mysqli_fetch_array($resultado);

                          
                        ?>
                            <td><?php printf ("%s\n", $row["PROGRAMA"]);?></td>
                            <td><a href="software_plantilla.php?id=<?php echo $row["enlace_software_id"]?>">Descargar</a></td>
                          </tr>


                          <?php
                            }
                          ?>
                        </tbody>
                    </table>
                

                </div>
                </div>
            </div>
        </div>


        


        

    
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; UEM</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>