<?php
	class Categorias extends CI_Model{

		public function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function get_categorias(){
			$query = $this->db->get("categorias");
			return $query->result();
		}

		public function get_categoria($id){
			$query = $this->db->get_where('categorias', array('id'=>$id));
			return $query->result();
		}
	}

?>