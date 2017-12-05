<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('proyectos/proyectos_model', '', TRUE);
	}

	public function index()
	{
    $array['proyectos'] = $this->proyectos_model->get_proyectos();
		foreach ($array['proyectos'] as &$proyecto) {
				$proyecto->categorias = $this->proyectos_model->get_proyectos_categories($proyecto->proyectos_id);
				$fotoPrincipal = $this->proyectos_model->get_proyectos_fotoprincipal($proyecto->proyectos_principal);
				$proyecto->fotoPrincipal = URL_SITIO . 'fotos/' . $proyecto->proyectos_id . '/' . $fotoPrincipal[0]->items_filename;
		}

    $this->load->view('proyectos/header');
    $this->load->view('proyectos/header-menu');
    $this->load->view('proyectos/sidebar');
    $this->load->view('proyectos/index', $array);
		$this->load->view('proyectos/footer');
	}

	public function editar($proyectoId)
	{

		error_reporting(0);
		if(isset($_POST['guardar'])){

			$this->load->model('file');

			$categorias = $this->input->post('proyecto_categorias');



			$config['upload_path'] = '../fotos/' . $proyectoId;
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = '0';
    	$config['overwrite']     = FALSE;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$files = $_FILES;
	    $cpt = count($_FILES['upload']['name']);
	    for($i=0; $i<$cpt; $i++)
	    {
	        $_FILES['upload']['name']= $files['upload']['name'][$i];
	        $_FILES['upload']['type']= $files['upload']['type'][$i];
	        $_FILES['upload']['tmp_name']= $files['upload']['tmp_name'][$i];
	        $_FILES['upload']['error']= $files['upload']['error'][$i];
	        $_FILES['upload']['size']= $files['upload']['size'][$i];


					if($this->upload->do_upload('upload')){
          	$fileData = $this->upload->data();
            $uploadData[$i]['items_filename'] = $fileData['file_name'];
						$uploadData[$i]['items_fecha'] = date("Y-m-d H:i:s");
            $uploadData[$i]['items_proyecto'] = $proyectoId;
          }

	    }


			if(!empty($uploadData)){
				$insert = $this->file->insert($uploadData);
				$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
			}

			$this->proyectos_model->update_proyecto($proyectoId,
																		 $this->input->post('proyecto_titulo'),
																		 $this->input->post('proyecto_descripcion')
																	 );

			/***  Actualizo categorías  ***/
			$this->proyectos_model->borrar_categorias($proyectoId);
			foreach ($categorias as $c) {
				$nuevoC = explode('-', $c);
				$idCategoria = $nuevoC[1];
				$this->proyectos_model->agregar_categoria($proyectoId, $idCategoria);
			}

		}

		$array['proyecto'] = $this->proyectos_model->get_proyecto_por_id($proyectoId)[0];

		$array['proyecto']->categorias = $this->proyectos_model->get_categorias();
		$categorias_proyecto = $this->proyectos_model->get_proyectos_categories($array['proyecto']->proyectos_id);
		$catProyecto = array();
		foreach ($categorias_proyecto as $k) {
			array_push($catProyecto, $k->categoria_id);
//			$catProyecto[] = $k->categoria_id;
		}
		$array['proyecto']->categorias_proyecto = $catProyecto;


		$fotoPrincipal = $this->proyectos_model->get_proyectos_fotoprincipal($array['proyecto']->proyectos_principal);
		$array['proyecto']->fotoPrincipal = URL_SITIO . 'fotos/' . $array['proyecto']->proyectos_id . '/' . $fotoPrincipal->items_filename;
		$array['proyecto']->items = $this->proyectos_model->get_fotos_por_proyecto($proyectoId);

		$this->load->view('proyectos/header');
		$this->load->view('proyectos/header-menu');
		$this->load->view('proyectos/sidebar');
		$this->load->view('proyectos/index-editar', $array);
		$this->load->view('proyectos/footer');

	}


}
