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
     <div class="mainform">
    <h1 style="color:#bd37f7;">Actualización de Datos</h1>
     <br/>
        <h4>Seleccione titulo obtenido</h4>
        <form action="../views/titulo.php" method="POST">
            <br/>
            <select name="cmbTitulo" id="cmbTitulo" class="form-control" required>
               <option value="">Seleccione una opción</option>
               <option value="INGENIERO EN AGROINDUSTRIA 4X4 2002-2006">INGENIERO EN AGROINDUSTRIA 4X4 2002-2006</option>
               <option value="INGENIERO AGRÓNOMO 4X4 2002-2019">INGENIERO AGRÓNOMO 4X4 2002-2019</option>
               <option value="INGENIERO EN GESTIÓN DE AGRONEGOCIOS 4X4 2002-2006">INGENIERO EN GESTIÓN DE AGRONEGOCIOS 4X4 2002-2006</option>
               <option value="INGENIERO EN DESARROLLO SOCIOECONÓMICO Y AMBIENTE 4X4 2002-2012">INGENIERO EN DESARROLLO SOCIOECONÓMICO Y AMBIENTE 4X4 2002-2012</option>
               <option value="INGENIERO EN AGROINDUSTRIA ALIMENTARIA 4X4 2007-2019">INGENIERO EN AGROINDUSTRIA ALIMENTARIA 4X4 2007-2019</option>
               <option value="INGENIERO EN ADMINISTRACIÓN DE AGRONEGOCIOS 4X4 2007-2019">INGENIERO EN ADMINISTRACIÓN DE AGRONEGOCIOS 4X4 2007-2019</option>
               <option value="INGENIERO EN AMBIENTE Y DESARROLLO 4X4 2013-2019">INGENIERO EN AMBIENTE Y DESARROLLO 4X4 2013-2019</option>
               <option value="AGRÓNOMO 1946-2000">AGRÓNOMO 1946-2000</option>
               <option value="AGRÓNOMO - PIA">AGRÓNOMO - PIA</option>
               <option value="AGRÓNOMO - PPIA">AGRÓNOMO - PPIA</option>
            </select>
            <br/>
            <button name="btnSiguiente" class="btn btn-primary">Siguiente</button>
        </form>
    </div>
</body>
<style>
 .mainform{
    margin-top: 90px;
    width: 40%;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
 }
 label{
     font-size: 15px;
 }
 body{
    background: #b3ecd7;
 }
</style>
<?php
  session_start();
  if(isset($_POST["btnSiguiente"])){
  $title='';
  $title = $_POST["cmbTitulo"];
  $_SESSION["Titulo"] = $title;
}

?>
</html>