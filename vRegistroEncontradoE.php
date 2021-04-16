<!DOCTYPE html>
<html>
<head>
  <?php echo view('vEnlacesHead'); ?>
  <title>Registros</title>
</head>
<body>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <font face="Comic Sans MS" size=4 color="#000000">

  <title>REGISTROS</title>
</head>
<body>
 <div class="text-center text-dark p-3" style="background-color: rgb( 218, 247, 166);">
    <div class="row">
    <div class="col-lg-2 col-md-6 col-sm-12">
      <center><img src="http://sntsedesolmx.com/img/LOGOINDEX.png">
        </center>
      </div>
    <div class="col-lg-6 col-md-6 col-sm-12 ">
      <center><img class="modalorg" src="http://sntsedesolmx.com/img/BIENESTAR1.png" <="" center="">
        </center>
      </div>
    </div>
    </div>
  </div>
    <center>
    <div>
        <?php echo view ('vNavBar');?>
      <h1 style="color:#6C1635">SISTEMA DE ESTÍMULO ECONÓMICO PARA EMPLEADOS DE BIENESTAR</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"style="color: #6C1635">

  <div class="container">
    <div class="row">
      <h1 >Registro encontrado</h1>
      <form method="POST" action="../Home/actualizarRegistroE">
        <input type="hidden" class="form-control" id="id_usuarioE" name="id_usuarioE" value="<?php echo $id_usuarioE;?>">
        <div class="mb-3 row">
          <label for="text" class="col-sm-2 col-form-label">Nombre: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>">       
          </div>
        </div>
        <div class="mb-3 row">
          <label for="text" class="col-sm-2 col-form-label">Apellidos: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>">       
          </div>
        </div>
        <div class="mb-3 row">
          <label for="text" class="col-sm-2 col-form-label">RFC: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="RFC" name="RFC" value="<?php echo $RFC; ?>">       
          </div>
        </div>
        <div class="mb-3 row">
          <label for="text" class="col-sm-2 col-form-label">Número de plaza: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="num_plaza" name="num_plaza" value="<?php echo $num_plaza; ?>">       
          </div>
        </div>
                  <div class="mb-3 row">
          <label for="email" class="col-sm-2 col-form-label">Correo electrónico: </label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>">       
          </div>
        </div>
        <div class="mb-3 row">
          <label for="password" class="col-sm-2 col-form-label">Contraseña: </label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
          </div>
        </div>
        <div class="mb-3 row">
                  <label for="genero" class="col-sm-2 col-form-label" value="<?php echo $genero; ?>">Genéro: </label>
                  <div class="col-sm-10">   
                  <label for="genero" class="col-sm-2 col-form-label">Femenino</label>
                  <input type="radio"id="genero" name="genero"  value="F">   
                  <label for="genero" class="col-sm-2 col-form-label">Masculino</label>                      
                  <input type="radio"id="genero" name="genero" value="M">
                 </div>
                 
        <div class="mb-3 row">
          <button type="submit"style="color: #F8F9F9 ; background-color: #6C1635;border: #6C1635" class="btn btn-primary mb-3">Actualizar</button>
          <a type ="button"class="btn btn-danger mb-3" href="<?php echo base_url(); ?>/Home/eliminarRegistroE/<?php echo $id_usuarioE; ?>">Eliminar</a>
          
        </div>
      </form>
      
    </div>
    
  </div>
</body>
<?php echo view('vfooter'); ?>
</html>
<?php echo view('vfooters'); ?>  
