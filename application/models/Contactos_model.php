<?php 

/**
* Clase Contactos_model
*/
class Contactos_model extends CI_Model
{
	
	
	public function __construct()
        {
            // Call the CI_Model constructor
            parent::__construct();
        }
    //agregar registros
    public function add($_post)
    {
    	if (empty($_post)) {
    		return false;
    	}
    	return $this->db->insert("contactos",$_post);
    }
    //actualizar registros
    public function update($_post,$id)
    {
    	if (empty($_post)) {
    		return false;
    	}
    	if (!is_numeric($id)) {
    		return false;
    	}
       
    	return $this->db->where("id",$id)->update("contactos",$_post);
    }
    //listado de registros
    public function get()
    {
    	return $this->db->where("estado!=",99)->get("contactos")->result();	
    }
    //busqueda de un registro
    public function get_by_id($id)
    {
    	if (is_numeric($id)) {
    		return false;
    	}
    	return $this->db->where("id",$id)->get("contactos")->row();
    }
    public function getIp()
    {
        echo "mi ip es: ";
    }
}

