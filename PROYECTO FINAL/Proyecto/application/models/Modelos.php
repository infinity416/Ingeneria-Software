<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelos extends CI_Model {
    
	/*login */
	public $variables;

	public function _construct(){
		parent::_construct();
	}

	public function logadmin($ADMINISTRADOR,$CONTRASENA){

		$this->db->where('ADMINISTRADOR',$ADMINISTRADOR);
		$this->db->where('CONTRASENA',$CONTRASENA);
		$q = $this->db->get('loginadmi');
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function logemple($perfil,$contrasena){

		$this->db->where('perfil',$perfil);
		$this->db->where('contrasena',$contrasena);
		$q = $this->db->get('adminnew');
		if($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	/*fin*/

    /*administrador*/
  public function verempleado()
    {
        $us = $this->db->query("SELECT * FROM adminnew WHERE 1");
        $data = $us->result_array();
        return $data;
    }
    
    public function altaemple_model($nombre,$apellido_1,$apellido_2,$perfil,$contrasena,$colonia,$calle,$tel)
    {
        $ejecutar_consulta=$this->db->query("INSERT INTO adminnew(nombre, apellido_1, apellido_2, perfil, contrasena, colonia, calle, telefono ) VALUES ('$nombre','$apellido_1','$apellido_2','$perfil','$contrasena','$colonia','$calle','$tel')");
       
    }

	 public function bajaemple_model($folio)
	{
        $ejecutar_consulta= $this->db->query("DELETE FROM adminnew WHERE folio=$folio ORDER BY  nombre, apellido_1, apellido_2, perfil, contrasena, colonia, calle, telefono");
    }
	
	public function cambiosemple_model($folio,$nombre,$apellido_1,$apellido_2,$perfil,$contrasena,$colonia,$calle,$tel)
	{
        $ejecutar_consulta = $this->db->query("UPDATE adminnew SET nombre='$nombre', apellido_1='$apellido_1', apellido_2='$apellido_2', perfil='$perfil', contrasena='$contrasena', colonia='$colonia', calle='$calle', telefono='$tel' WHERE folio='$folio'");
    }
   			/*fin*/



   /*empleado*/

   	 public function altaorden_model($nom, $ape, $colo, $cal, $num_int, $num_ext, $cel, $pla, $fech)
    {
        $ejecutar_consulta=$this->db->query("INSERT INTO empleados_orden (Nom, Ape, Colonia, Calle, Num_int, Num_ext, Celular, Platillo, Fecha) VALUES ('$nom','$ape','$colo','$cal','$num_int','$num_ext','$cel','$pla','$fech')");
    }

    public function bajaorden_model($id)
	{
        $ejecutar_consulta= $this->db->query("DELETE FROM empleados_orden WHERE id=$id ORDER BY   Nom,Ape,Colonia,Calle,Num_int,Num_ext,Celular,Platillo,Fecha");
    }
	
	public function cambiorden_model($id,$nom, $ape, $colo, $cal, $num_int, $num_ext, $cel, $pla, $fech)
	{
        $ejecutar_consulta = $this->db->query("UPDATE empleados_orden SET Nom='$nom', Ape='$ape', Colonia='$colo', Calle='$cal', Num_int='$num_int', Num_ext='$num_ext', Celular='$cel', Platillo='$pla', Fecha='$fech' WHERE id='$id'");
    }
   /*fin*/
   

}