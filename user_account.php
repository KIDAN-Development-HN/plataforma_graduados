<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Egresados Zamorano</title>
</head>
<body>
    <div class="container">
      <h2>Creación de Cuenta</h2>
       <form action="" method="POST">
       </br>
          <label for="" id="">Usuario: </label>
          <input type="text" name="txtname" class="form-control">
          <label for="" id="">Contraseña: </label>
          <input type="password" name="txtpass"  class="form-control">
          <label for="" id="">Email: </label>
          <input type="email" name="txtmail"  class="form-control">
          </br>
          </br>
          <button type="button" name="btnEntrar" class="btn btn-success">Crear Cuenta</button>
          </br>
          </br>
          <a href="../views/login.php">Regresar Login</a>
          </br>
          </br>
          <a href="../views/changepass.php">Olvidaste tu contraseña?</a>
       </form>
    </div>
</body>
<style>
 .container{
     width:30%;
     margin-top:100px;
     text-align: center;
 }
 body{
    background-color:#b3ecd7;
}
</style>
</html>