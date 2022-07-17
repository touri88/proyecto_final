<?php include 'conexion.php'; ?>

<?php 

#mostrar datos 
 #vamos a consultar para llenar la tabla 
 $conexion = new conexion();
 $proyectos= $conexion->consultar("SELECT * FROM `proyectos`");
 #comprobamos que la info este en forma de arreglo
 #print_r($resultado);

?>
  <!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio - Diego Touriñan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body  data-bs-target="#navbar" data-bs-spy="scroll">

    <!--PRESENTACION CON FOTO -->
    <div class="bg-success bg-opacity-25">
      <div id="fondo1" class="row">
        <div class="col"></div>
        <div class="col-10 ">
          <div class="row">
            <div class="col-8 d-flex align-items-center justify-content-center">
              <h1>Diego Touriñan - Full Stack Developer Jr</h1>
            </div>
            <div class="col-4 d-flex align-items-center justify-content-center">
              <img src="img/profile2.jpeg" class="img img-fluid w-auto h-75" alt="">
            </div>
          
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>


   <!-- NAV QUE LLEVA A LAS DISTINTAS SECCIONES (HAY QUE HACERLO STICKY CUANDO BAJAS)-->
  <nav id="navbar" class="navbar text-white bg-dark bg-gradient navbar-expand-md sticky-top fixed-top">
    <div>
      <a href="#fondo1" class="text-white navbar-brand h1 mx-2 px-2">Diego Touriñan</a>
    </div>
    <ul class="nav nav-pills navbar-nav">
      <li id="" class="nav-item rounded m1">
        <a href="#proyectos" class="nav-link text-white">Proyectos</a>
      </li>
      <li id="" class="nav-item rounded m1">
        <a href="#acercaDe" class="nav-link text-white">Acerca de mi</a>
      </li>
      <li id="" class="nav-item rounded m1">
        <a href="#contacto" class="nav-link text-white">Contacto</a>
      </li>
    </ul>
  </nav>


  <div class="bg-primary bg-opacity-25">
    <div id="proyectos" class="row">
        <div class="col"></div>
        <div class="col-10 mb-5 mt-5">
            <h1>Mis Proyectos</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 mb-2">

            <?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ ?>
    
                    <div class="col">
                        <div class="card h-100 border-primary">
                    
                            <div class="card-body bg-dark bg-gradient text-white">
                            <a href=""><img class="card-img-top" width="100" src="imagenes/<?php echo $proyecto['imagen'];?>" alt=""></a>
                                <h5 class="card-title"><?php echo $proyecto['nombre'];?></h5>
                                <p class="card-text"><?php echo $proyecto['descripcion'];?></p>
                            </div>
                            <div class="card-footer bg-dark bg-gradient border-primary">
                                <small class="text-muted">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col">
                                            <button class="btn btn-outline-light">
                                            <i class="bi bi-github"><a href=""></a></i>
                                            </button>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col">
                                            <button class="btn btn-outline-light ">
                                                <i class="bi bi-globe"><a href=""></a></i>
                                            </button>
                                        </div>
                                        <div class="col"></div>
                                    </div>
                                </small>
                            </div>
                        </div>    
                    </div>
                <?php } ?>        
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>

<!--ACERCA DE-->
<div class="bg-primary bg-opacity-25" id="#acercade">
  <div class="row" id="acercaDe">
  <div class="col"></div>
  <div class="col-10 d-flex mb-5 mt-5">
    <div class="col-8 ">
      
      <h1 class="mb-2">Acerca de mi</h1>
      
      <p class="mt-4">Tengo 34 años, soy de Villa Luzuriaga, partido de La Matanza. Actualmente trabajo en el área de salud, pero mi objetivo es comenzar a trabajar en el sector de IT.</p> 
      <p>Vivo con Giselle y mis dos gatas, Perla y Mora. En mis tiempos libres me gusta tocar la guitarra y andar en bicicleta. Soy hincha de River, y uno de los primeros es subirse a la Scaloneta.</p>
      <p>Siempre me gustó el armado de paginas web, pero en 2020 comencé a capacitarme con cursos para adquirir mayores habilidades y aprender nuevos lenguajes.</p>
      <p class="mb-2">Personalmente considero que la programación es una herramienta fabulosa, y a su vez indispensable en la construcción del futuro. Su uso es aplicable a todas las áreas del conocimiento de la humanidad y permite brindar soluciones de forma eficaz.</p>
      
    </div>
    <div class="col-4"> 
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">           
                <img src="img/diegoygise.jpeg" alt="" srcset="" class="rounded">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <img src="img/perla.jpeg" alt="" srcset="" class="rounded">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <img src="img/mora.jpeg" alt="" srcset="" class="rounded">
              </div>
            </div>
          </div>      
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
  </div>
  <div class="col"></div>
</div>
</div>

   <!--CONTACTO-->
<div class="bg-primary bg-opacity-25" >
  <div id="contacto" class="row">
    <div class="col"></div>
    <div class="col-10 mb-5 mt-5">
        <div class="row">
        <div class="col-6 mt-3 mb-3">
          <h2 class="d-flex justify-content-center">Formulario de contacto</h2>
          <form class="mt-5 mb-5" method="post" action="php/correo.php">
              <div class="row">
                <div class="col">
                  <input class="form-control mb-2" type="text" name="nombre" id="nombre" required="" placeholder="Nombre...">
                </div>
                <div class="col">
                  <input class="form-control mb-2" type="email" name="email" id="email" required="" placeholder="Correo electrónico...">
                </div>
              </div>
              <div class="col">
                <input class="form-control mb-2" type="text" name="asunto" id="asunto" required="" placeholder="Asunto...">
              </div>
            <textarea class="form-control mb-2" name="mensaje" id="mensaje" required="" placeholder="Escribe tu mensaje..." rows="3"></textarea>
            <div class="row">
              <div class="col">
                <button type="submit" class="btn btn-outline-dark rounded w-100 p-1" id="">Enviar</button>
              </div>
              <div class="col">
                <button type="reset" class="btn btn-outline-dark rounded w-100 p-1" id="">Borrar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-6 mt-3 mb-3">
          <h2 class="d-flex justify-content-center">Enlaces complementarios</h2>
          
          <div class="d-flex justify-content-evenly mt-5 mb-5">
              <div class="col-5">
                <button type="button" class="btn btn-dark btn-lg w-100 p-1">GitHub <a href="https://github.com/touri88" target="_blank"><i class="bi bi-github"></i></a></button>
              
              </div>
              
              <div class="col-5">
                <button type="button" class="btn btn-dark btn-lg w-100 p-1">LinkedIn <a href="https://www.linkedin.com/in/diego-touri/" target="_blank"><i class="bi bi-linkedin"></i></a></button>
              </div>
            </div>          
        </div>
      </div>

    </div>
    <div class="col"></div>
  </div>
</div>



  
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>
   
   
   
  
    
   
