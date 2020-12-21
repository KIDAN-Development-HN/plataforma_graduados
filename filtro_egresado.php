
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados Zamorano</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body style="background: #b3ecd7;"> 

   <div class="container" style="width: 40%; margin-top: 50px;" >
       <div class="row">
          <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white">
               <div class="card-header">
                 <p>BUSQUEDA DATOS EGRESADO</p>
                 <div class="card-body">
                    <form action="../views/filtro_egresado.php" method="GET">
                        <div class="form-row">
                        <label for="txtNombre">Escriba sus nombres : </label>
                        <input type="text" name="txtNombre" class="form-control">
                        <br/>
                        <label for="txtApellido">Escriba sus apellidos: </label>
                        <input type="text" name="txtApellido" class="form-control">
                        <br/>
                        <input type="submit" name="btnsend" class="btn btn-primary">
                        <hr/>
                        <?php
                        session_start();
                     try {
                      $nombre='';
                      $apellido='';
                      $clase = '';
                      $codigo = '';
                      if(isset($_POST["btnsend"]))
                      {
                        require_once "../db/dao.php";
                        $con = Conectar();
                         $n= $_POST["txtNombre"];
                         $a = $_POST["txtApellido"];
                        echo $n;
                        echo $a;
                        $sql = "SELECT nombres,apellidos,clase,codigo FROM graduat3s
                        WHERE nombres = :names AND apellidos = :apelli";
                        $stmt = $con->prepare($sql);
                        $stmt->bindParam(":names", $n, PDO::PARAM_STR,255);
                        $stmt->bindParam(":apelli", $a, PDO::PARAM_STR,255);
                        $stmt->execute();
                        for($i=0;$i<1;$i++){
                           $fila = $stmt->fetch(PDO::FETCH_OBJ);
                           $nombre =  $fila["nombres"];
                           $apellido = $fila["apellidos"];
                           $clase = $fila["clase"];
                           $codigo = $fila["codigo"];
                       
                          }
                      $t = $_SESSION["Titulo"];
                      echo $t;
                      unset($_SESSION['datosAEnviar']);
session_destroy();
                      }
                  } catch (PDOException $e) {
                      echo $e->getMessage();
                  }
                        
              
                        
                       ?>
                        <div class="col-md-10 mb-9">
                            <label for="txtNombre" id="txtNombre">Nombres: </label>
                            <input type="text" name="txtNombre" class="form-control" value="<?php echo $nombre?>">
                        </div>
                        <br/>
                        <div class="col-md-10 mb-9">
                            <label for="txtApellido" id="txtApellido">Apellidos: </label>
                            <input type="text" name="txtApellido" class="form-control" value="<?php echo $apellido ?>">
                        </div>
                        <br/>
                        <div class="col-md-10 mb-9">
                            <label for="txtClase" id="txtClase">Clase: </label>
                            <input type="text" name="txtClase" class="form-control" value="<?php echo $clase ?>">
                        </div>
                        <br/>
                        <div class="col-md-10 mb-9">
                            <label for="txtCodigo" id="txtCodigo">Codigo: </label>
                            <input type="text" name="txtCodigo" class="form-control" value="<?php echo $codigo?>">
                        </div>
                        <br/>
                        <button name="btnSiguiente2" class="btn btn-primary">Siguiente</button>
                      </form>
                    </div>
                 </div>
               </div>
            </div>
          </div>
       </div>
   </div>    
</body>
</html>
