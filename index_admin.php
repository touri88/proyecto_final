<?php include 'header.php'; ?>
<?php include 'conexion.php'; ?>

<?php 

#mostrar datos 
 #vamos a consultar para llenar la tabla 
 $conexion = new conexion();# es un objeto de tipo conexion,
 
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
  <body class="bg-primary bg-opacity-25">
        
  

<div class="pt-5">
    <div class="container">
        <p class="lead">Proyectos de <?php echo $_SESSION['usuario'] ?></p>
        <hr class="">       
    </div>
</div>
<div class="col"></div>
<div class="col">
<div class ="row row-cols-1 row-cols-md-3 g-5 mx-5 my-5">
<?php #leemos proyectos 1 por 1
                foreach($proyectos as $proyecto){ ?>
                    <div class="row mb-5">
                    <div class="col"></div>
                    <div class="col-10">
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
                    <div class="col"></div>
                    </div>
                <?php } ?>
</div>
</div>
<div class="col"></div>






</body>

<?php include 'footer.php'; ?>