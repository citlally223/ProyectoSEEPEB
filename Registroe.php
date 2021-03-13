<!DOCTYPE html>
<html>
<head>
  <?php echo view('vEnlacesHead');?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo base_url()?>css/estilos.css"/>
        <font face="Comic Sans MS" size=4 color="#000000">
  <title>Registro de usuario empleado</title>   
      <font >
</head>
    <body >
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
  <h1 style="color:#6C1635">SISTEMA DE ESTÍMULO ECONÓMICO PARA EMPLEADOS DE BIENESTAR</h1>
</div > 
              <?php echo view('vNavbar');?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16"style="color: #6C1635">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg>
     <div class="container" >
      <div class="row justify-content-md-center">
        <div class="cold-md-auto">
          <h4 class="alert alert-primary" role="alert"style="background-color: #FFFF; color:#6C1635;border-color: #6C1635 ">REGISTRO PARA EMPLEADOS</h4>
        </div>
      </div>
  <form action="../Home/insertarForm" method="post">
              <div class="mb-3 row">
                 <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">  
                    <input type="text" class="form-control"id="nombre"name="nombre" placeholder="Nombre"> 
              </div>  
        </div>
              <div class="mb-3 row">
                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos </label>
                  <div class="col-sm-10">   
                    <input type="text" class="form-control"id="apellidos"name="apellidos" placeholder="Apellidos">
                    </div>
                    </div>
              <div class="mb-3 row">                                     
                 <label for="RFC" class="col-sm-2 col-form-label">RFC </label> 
                  <div class="col-sm-10">  
                 <input type="text" class="form-control"id="RFC"name="RFC" placeholder="RFC"> 
                    </div>
                    </div>
                <div class="mb-3 row">   
                <label for="num_plaza" class="col-sm-2 col-form-label">Número de plaza </label> 
                  <div class="col-sm-10">                  
                <input type="text"class="form-control"id="num_plaza" name="num_plaza" placeholder="Número de plaza">
                    </div>
                    </div>
                <div class="mb-3 row"> 
                  <label for="email" class="col-sm-2 col-form-label">Correo electrónico </label>
                  <div class="col-sm-10"> 
                  <input type="email" class="form-control"id="email" name="email" placeholder="correo@ejemplo.com">
                    </div>
                    </div>
                    <div class="mb-3 row"> 
                  <label for="password" class="col-sm-2 col-form-label">Contraseña </label> 
                  <div class="col-sm-10"> 
                  <input type="password"class="form-control"id="password" name="password" placeholder="Contraseña">
                </div>
              </div>
              <div class="mb-3 row">
                  <label for="genero" class="col-sm-2 col-form-label">Genéro:</label>
                  <div class="col-sm-10">   
                  <label for="genero" class="col-sm-2 col-form-label">Femenino</label>
                  <input type="radio"id="genero" name="genero"  value="F">   
                  <label for="genero" class="col-sm-2 col-form-label">Masculino</label>                      
                  <input type="radio"id="genero" name="genero" value="M">
                 </div>
              </div>
              <div class="mb-3 row">                 
     <button type="submit" style="color: #F8F9F9 ; background-color: #6C1635;border: #6C1635" class="btn btn-primary btn-xs">Registrar</button>
                </div>
   </font>
  </form>
</div>
</body>
<?php echo view('vfooter'); ?>
</html>
<div class="text-center text-dark p-3" style="background-color: rgb( 218, 247, 166);">
<div class="container my-4">

    <p class="font-weight-bold">SINDICATO BIENESTAR DE TRABAJADORES DE GUANAJUATO</p>
    
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">CONÓCENOS</h5><i class="bi bi-geo-alt-fill"></i>
        <p>Domicilio:Km. 5 Carretera Guanajuato-Juventino Rosas,
           Col. Burócratas Marfil, C.P. 36210, Guanajuato, Gto.
           Fax (01 473) 733 12 42 Correo: sntsedesolgto10@gmail.com
           (01 473) 733 12 25 Subdeleg. Adva. (01 473) 733 12 38 ext. 221 Sindicato</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
       <h5 class="text-uppercase">¿QUIÉNES SOMOS?</h5> <i class="bi bi-person-fill"></i> 


        <ul class="list-unstyled">
          <li>
            <a></a>SECRETARIO GENERAL:
            </a> <br>
            <a href="#!">Teodulo Hernandez Silva</a>
          <li>
            <a></a>
          </li>
          <li>
            <a>DESARROLLADORAS</a><br>
          </li>
          <li>
            <a href="#!">Karina Hernández Blancarte</a><br>
            <a href="#!">Citlally Herrera Méndez</a><br>
            <a href="#!">Valeria Marlen Flores López</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5> <i class="bi bi-globe"></i>  

        <ul class="list-unstyled">
          <li>
          <i class="bi bi-check-circle-fill"></i><a href="http://sntsedesolmx.com/legal.php">Página oficial de bienestar</a>
          </li>
          <li>
            <i class="bi bi-github"> </i> <a href="https://github.com/karinahdez123">Nuestro GitHub</a>
          </li>
          <li>
           <i class="bi bi-whatsapp"> </i> <a href="https://web.whatsapp.com/">Contacto</a>
          </li>
          <li>
           <i class="bi bi-linkedin"> </i><a href="https://mx.linkedin.com/">Linkedin</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> SNTbienestar.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

  </div>