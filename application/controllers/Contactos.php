<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
    {

        // Call the CI_Controller constructor
        parent::__construct();
        $this->load->model("Contactos_model");
	}    

	//Cargar la vista
	public function index()
	{
			echo "registro hoy <br>";
	
		$data['nombre']= "Aldebaran";
		$data['apellido']= "Tauro";
		$data['telefono']= "13131333";
		$data['email']= "AldebaranTauro@gmail.com";
		$data['mensaje']= "Santo de Tauro en la guerra santa de la era del Mito";
		$data['ip']= "1333";
		//print_r($data);
		$id=4;
		//$sql=$this->db->where("id",$id)->update("contactos",$data);

		/*agregar registro
		$this->Contactos_model->add($data);
		echo "se registro correctamente";
		*/
		$sql=$this->Contactos_model->update($data,$id);
		//echo $sql;

		
		//visualizar consulta generada por codeigniter
		echo $this->db->last_query();
		if ($sql==1) {
			//print_r($sql);
		echo "<br>se actualizo correctamente";
		}
		
		

	}
	//Guardar informacion en la base de datos
	public function store()
	{
		$sql=$this->Contactos_model->get();
		//var_dump($sql[0]);
	
		for ($i=0; $i < count($sql); $i++) { 
			echo "<pre>";
			print_r($sql[$i])."<br>";
			echo "</pre>";
		}
	}
	//Muestra un determinado registro
	public function show()
	{
		
	}
	//Crear
	public function create()
	{
	
	}
	//Cargar el formulario de editar
	public function edit()
	{
		
	}
	//Actualizar la informacion
	public function update()
	{
		
	}
	//Eliminar un determinado registro
	public function destroy()
	{
		
	}
	
}
