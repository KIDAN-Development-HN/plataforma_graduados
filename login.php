<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
   <h2>Bienvenido ingrese sus credeciales</h2>
       <form action="" method="POST">
          <label for="txtUser" id="txtUser">Usuario: </label>
          <input type="text" name="txtUser" class="form-control">
          <br/>
          <br/>
          <label for="txtpass" id="txtpass">Password: </label>
          <input type="password" name="txtpass" class="form-control">
          <br/>
          <br/>
          <button type="button" name="btnEntrar" class="btn btn-success">Entrar</button>
          <br/>
          <br/>
          <a href="../views/user_account.php">No tienes una cuenta?</a>
       </form>
    </div>
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
</style>
</html>