<?php

namespace App\Controllers;
use App\Models\mUsuariose;
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
}
