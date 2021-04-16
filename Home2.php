<?php

namespace App\Controllers;
use App\Models\mUsuariose;
use App\Models\mUsuariosa;
use App\Models\mUsuarios;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenidos()
	{
		return view('vBienvenida');
	}
	public function registro()
	{
		return view('vRegistro');
	}
		public function formularioR()
	{
		return view('Registroe');
	}
		public function inicioE()
	{
		return view('vInicio');
	}
	public function insertar()
	{
		$mUsuarios = new mUsuarios();
		$usuarioNuevo=[
		    "usuario"=>$_POST['email'],	
		    "password"=>$_POST['password']    		    	    		    		    
		];
		$mUsuarios->insert($usuarioNuevo);
		$datoId['idRegistrado']=$mUsuarios->db->insertId();
		return view("vSuccess",$datoId);
	}
		public function insertarForm()
	{
		$mUsuariose = new mUsuariose();
		$usuarioNuevo=[
		    "nombre"=>$_POST['nombre'],
		    "apellidos"=>$_POST['apellidos'],
		    "RFC"=>$_POST['RFC'],
		    "num_plaza"=>$_POST['num_plaza'],
		    "correo"=>$_POST['email'],	
		    "password"=>$_POST['password'],
		    "genero"=>$_POST['genero']		    		    	    		    		    
		];
		$mUsuariose->insert($usuarioNuevo);
		$datoId['idRegistrado']=$mUsuariose->db->insertId();
		return view("vSuccess",$datoId);
	}
	public function formulariodos()
	{

		return view('vformulariodos');
	}
		public function insertarForm2(){
		$mUsuariosA = new mUsuariosa();
		$UsuarioNuevo=[
			"Nombre"=> $_POST['Nombre'],
			"Usuario"=> $_POST['Usuario'],
			"Email"=> $_POST['Email'],
			"Password"=> $_POST['Password']
		];
		$mUsuariosA->insert($UsuarioNuevo);
		$datoId['idRegistrado'] = $mUsuariosA->db->insertID();
		return view("vSuccessA",$datoId);
	}
	public function mostrarRegistrosA()
	{
		$mUsuariosa = new mUsuariosa();
		$todos = $mUsuariosa->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("vRegistrosA",$usuarios);
	}
	public function mostrarRegistrosE()
	{
		$mUsuariose = new mUsuariose();
		$todos = $mUsuariose->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("vRegistroE",$usuarios);
	}
	public function mostrarRegistros()
	{
		$mUsuarios = new mUsuarios();
		$todos = $mUsuarios->findAll();
		$usuarios=array('usuarios'=>$todos);

		return view("vRegistros",$usuarios);
	}
	public function buscarRegistroA()
	{
		$mUsuariosa = new mUsuariosa();
		$id_usuario = $_POST['Id_usuario'];
		$usuario =$mUsuariosa->find($Id_usuario);
		return view("vRegistroEncontradoA",$usuario);
		/*$todos=mUsuarios->where('usuario','citlally_herrera@hotmail.com')->findAll();
		$usuarios=array('usuarios'=>$todos);
		return view("vRegistros",$usuarios);*/

	}
	public function buscarRegistro()
	{
		$mUsuarios = new mUsuarios();
		$id_usuario = $_POST['id_usuario'];
		$usuario =$mUsuarios->find($id_usuario);
		return view("vRegistroEncontrado",$usuario);
		/*$todos=mUsuarios->where('usuario','citlally_herrera@hotmail.com')->findAll();
		$usuarios=array('usuarios'=>$todos);
		return view("vRegistros",$usuarios);*/

	}
	public function buscarRegistroE()
	{
		$mUsuariose = new mUsuariose();
		$id_usuarioE = $_POST['id_usuarioE'];
		$usuario =$mUsuariose->find($id_usuarioE);
		return view("vRegistroEncontradoE",$usuario);
		/*$todos=mUsuarios->where('usuario','citlally_herrera@hotmail.com')->findAll();
		$usuarios=array('usuarios'=>$todos);
		return view("vRegistros",$usuarios);*/

	}
	public function actualizarRegistro()
	{
		$mUsuarios = new mUsuarios();
		$id_usuario =$_POST['id_usuario'];
		$usuarioActualizado =[
			"usuario"=>$_POST['email'],
			"password"=>$_POST['password']
		];
		$mUsuarios->update($id_usuario,$usuarioActualizado);
		//$usuario=$mUsuarios->find($id_usuario);
		return $this->mostrarRegistros();
	}
	public function actualizarRegistroA()
	{
		$mUsuariosa = new mUsuariosa();
		$id_usuario =$_POST['Id_usuario'];
		$usuarioActualizado =[
			"usuario"=>$_POST['email'],
			"password"=>$_POST['password']
		];
		$mUsuarios->update($id_usuario,$usuarioActualizado);
		//$usuario=$mUsuarios->find($id_usuario);
		return $this->mostrarRegistros();
	}
	public function actualizarRegistroE()
	{
		$mUsuariose = new mUsuariose();
		$id_usuarioE =$_POST['id_usuarioE'];
		$usuarioActualizado =[
			"usuario"=>$_POST['email'],
			"password"=>$_POST['password']
		];
		$mUsuariose->update($id_usuarioE,$usuarioActualizado);
		//$usuario=$mUsuarios->find($id_usuario);
		return $this->mostrarRegistrosE();
	}
	public function eliminarRegistro($id)
	{
		$mUsuarios = new mUsuarios();
		$id_usuario = $id;
		$mUsuarios -> delete($id_usuario);

		return $this -> mostrarRegistros();
	}
	public function eliminarRegistroE($id)
	{
		$mUsuariose = new mUsuariose();
		$id_usuarioE = $id;
		$mUsuariose -> delete($id_usuarioE);

		return $this -> mostrarRegistrosE();
	}
}
