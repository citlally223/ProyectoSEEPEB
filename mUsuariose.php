<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuariose extends Model{
	protected $table = 'empleados';
	protected $primarykey ='id_usuarioE';

	protected $useAutoIncremet=true;

	protected $returnType ='array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['nombre', 'apellidos','RFC','num_plaza','correo','password','genero'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;	
	}	
?>