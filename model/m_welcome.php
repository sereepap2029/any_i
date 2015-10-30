<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_welcome extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}
		public function get_all_welcome(){	
			$res=$this->get("welcome");
			return $res;
		}
		public function insert_welcome($data){

			$this->insert("welcome",$data);	
		}
		public function update_welcome($data,$id){
			$where = array('id' => $id);
			$this->update("welcome",$data,$where);	
		}

		
	}

?>