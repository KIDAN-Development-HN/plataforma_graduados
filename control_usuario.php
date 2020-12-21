<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados Zamorano</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <h2>Control de Usuarios</h2>
     </br>
     </br>
        <label>Ingrese correo para buscar usuario: </label> 
        <input type="text" name="txtsearch" class="form-control">  
        </br>
        <button name="txtsearch" class="btn btn-success">Buscar</button>
        </br>
        </br>
          <table border="1">
            <thead>
              <th>Codigo</th>
              <th>Usuario</th>
              <th>Estado</th>
              <th>Codigo Rol</th>
              <th>Elegir</th>
              <th>Elegir</th>
              <th colspan="2">Acciones</th>
            </thead>
             <tr>
               <td></td>
               <td></td>
               <td>
             
               </td>
               <td>
              
               </td>
               <td>
               <select name="cmbEstado">
                 <option>ADM</option>
                 <option>DIG</option>
               </select>
               <td>
               <select name="cmbEstado">
                 <option>ACT</option>
                 <option>INA</option>
               </select>
               </td>
               <td><a href="">Asignar Rol</a></td>
               <td><a href="">Deshabilitar</a></td>
             </tr>
          </table>
           </br>
           </br>
          <a href="">Regresar</a>
    </div>
    <?php
function AgregarUsuario($user,$pass){
    try {
           require_once "../db/dao.php";
            $con = Conectar();
            $sql="INSERT INTO usuario(username,userpswd,userfchingcreate,userest)
            VALUES('{$user}',md5('{$pass}'),now(),'ACT')";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            echo "<script>alert('!usuario creado con exito!');</script>";
        
    } catch (PDOException $e) {
          echo $e->getMessage();
    }
}
if(isset($_POST["btnCrear"])){
$user = $_POST["txtUser"];
$pass = $_POST["txtPass"];
AgregarUsuario($user,$pass);
}
?>
</body>
<style>
   .container{
    text-align: center;
    margin-top: 90px;
    margin-left: auto;
    margin-right: auto;
    width: 30%;
   }
   body{
    background: #b3ecd7;
 }
 h2{
     color:#c958fa;
 }
 table tr td{
     border:1px solid #ccc;
     padding:7px;
     font-size:12px;
     color:#555;
 }

</style>
</html>