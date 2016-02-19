  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	private $controller;

	public function __construct()
        {
            // Call the CI_Controller constructor
            parent::__construct();
            $this->controller = strtolower(get_class());
            $this->load->model("Clientes_model");
            $this->load->library('form_validation');
            $this->load->library('pagination');
        } 	

	//Guardar informacion en la base de datos
	public function store()
	{
		$this->load->helper(array('form'));
		$this->form_validation->set_rules('nombre', ' nombre', 'trim|required|max_length[150]');
		$this->form_validation->set_rules('apellidos', ' apellidos', 'trim|required|max_length[200]');
		$this->form_validation->set_rules('dni', ' dni', 'trim|required|integer|min_length[8]|max_length[8]');
		if ($this->form_validation->run($this->controller) == FALSE)
        {
            $data['controller'] = $this->controller;
			$data['view'] = "master/".$this->controller."/load_add";
			$this->load->view('dashboard/layout_index',$data);
        }
        else  
        {
            $_post = $this->input->post();
			$_result = $this->Clientes_model->add($_post);
			
			if ($_result) 
				redirect($this->controller.'/show');
			else
				exit(json_encode(array('status'=>FALSE,'message'=>'Error a registrar')));
        }

	}

	//Muestra un determinado registro
	public function show()
	{
		//inicio codigo de paginacion

		$offset = ($this->uri->segment(3) != '' ? $this->uri->segment(3): 0);
		$config['base_url'] = site_url('clientes/show');
        $config['total_rows'] = $this->db->count_all('clientes');
        $config['per_page'] = 3;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
	    $this->pagination->initialize($config); 
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $data['paginations'] =  $this->pagination->create_links();

		//fin codigo de paginacion

		$data['controller'] = $this->controller;
		$data['items'] = $this->Clientes_model->get();
		$data['view'] = "master/".$this->controller."/load_list";
		$this->load->view('dashboard/layout_index',$data);
	}
	//Crear
	public function create()
	{
		$data['controller'] = $this->controller;
		$data['view'] = "master/".$this->controller."/load_add";
		$this->load->view('dashboard/layout_index',$data);

	}
	//Cargar el formulario de editar
	public function edit($id)
	{
		if (!is_numeric($id)) 
			redirect($this->controller.'/show');

		$by_id=$this->Clientes_model->get_by_id($id);

		if (!$by_id) 
			 exit(json_encode(array('status'=>FALSE,'message'=>'id no registrado')));
		//print_r($_POST);

		$data['controller'] = $this->controller;
		$data['id'] = $id;
		$data['items'] = $by_id;
		$data['view'] = "master/".$this->controller."/load_edit";
		$this->load->view('dashboard/layout_index',$data);
	}
	//Actualizar la informacion
	public function update()
	{
		print_r(expression)
	}
	//Eliminar un determinado registro
	public function destroy()
	{
		echo "destruido por el tesoro del cielo";
	}
	
}
