<?php

	class Blog extends CI_Controller{
		public function index(){

			$this->load->model("Categorias");
			$data = array(
				'title' => 'Minha primeira consulta utilizando MVC',
				'categ' => $this->Categorias->get_categorias()
			);
			$this->load->view('categorias', $data);

		}

		public function categ($id){
			$this->load->model("Categorias");
			$data = array(
				'title' => 'Minha primeira consulta utilizando MVC',
				'categ' => $this->Categorias->get_categoria($id)
			);
			$this->load->view('categorias', $data);
		}
	}

?>