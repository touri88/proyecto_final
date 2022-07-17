<?php
    
    #inicializamos variables de sesion 
    session_start();
    #validar datos
    if ($_POST){
      #conexion a la base
      #mail
      #contraseña
      #es_admin s o n 
      /*
      select es_admin
      from usuarios where
      mail="" and contraseña = "";*/
        if( ($_POST['email']=="touri88@gmail.com") && ($_POST['pass']=='46508854') ){
          $_SESSION['usuario']="Administrador";
          $_SESSION['logueado']='S';
          #redirecciono porque ingreso ok 
          header("location:index_admin.php");
          die();
         // exit;
        }
        else{
           echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';
           header("location:index.php");
          
           die();
        }
    }

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
  <body class="bg-primary bg-opacity-25 p-5">
  <div class="p-5" >
    
      <div class="row  p-5">
          <div class="col-md-2">
          
          

          </div> 
          <div class="col-md">
            <div class="row">
              <div class="col border border-dark d-flex justify-content-center align-items-center">
                <h1>Acceso al CRUD</h1>
    
              </div>
              <div class="col">
                  <div class="card border-primary"> 
                      <div class="card-header bg-dark bg-gradient border-primary text-white">
                          Iniciar Sesión
                      </div>
                      <div class="card-body bg-dark bg-gradient border-primary text-white">
                          <form action="login.php" method="post" >
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text text-secondary">Nunca compartiremos su correo electrónico con nadie más.</div>        
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">   
                            <br>
                            <button type="submit" class="btn btn-outline-light">Entrar al Portfolio</button>
                              
                              
                          </form>
                        </div>
                </div>
                </div>
             </div>
          
        </div> 
          <div class="col-md-2">

          </div> 

      </div>
    
       
    </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>