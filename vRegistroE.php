<!DOCTYPE html>
<html>
<head>
	<?php echo view ('vEnlacesHead');?>

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
		<div class="col">
		<h1 >Registros actuales</h1>
		<table class="table table-striped">
			<thead>
			<tr>
			    <th scope="col">Id_usuario</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellidos</th>
				<th scope="col">RFC</th>
				<th scope="col">Num_plaza</th>
                <th scope="col">Correo</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Genero</th>
			</tr>
		</thead>
    <tbody>
    	
    	<?php 
        $db =\Config\Database::connect();
        $query = $db->query("SELECT * FROM empleados");
        foreach ($query->getResult('array') as $usuario) {  ?>
    		<tr>
    			<td><?php echo $usuario['id_usuarioE']; ?> </td>
    			<td><?php echo $usuario['nombre']; ?> </td>
    			<td><?php echo $usuario['apellidos']; ?> </td>
    			<td><?php echo $usuario['RFC']; ?> </td>
    			<td><?php echo $usuario['num_plaza']; ?> </td>
                <td><?php echo $usuario['correo']; ?> </td>
                <td><?php echo $usuario['password']; ?> </td>
                <td><?php echo $usuario['genero']; ?> </td>
    		</tr>
    		<?php } ?>
            

    </tbody>
</table>
</div>
</div>
</div>

</body>
<?php echo view('vfooter'); ?>
</html>
<?php echo view('vfooters'); ?>  
