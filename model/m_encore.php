<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_encore extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}
		public function get_encore(){			
			$res=$this->get("encore");
			return $res;
		}
		public function get_encore_by_id($id){
			$this->where("id",$id);
			$res=$this->get("encore");
			return $res;
		}
		public function insert_encore($data){

			$this->insert("encore",$data);	
		}
		public function update_encore($data){
			$where = array('id' => "1");
			$this->update("encore",$data,$where);	
		}
		public function delete_encore($id){
			$where = array('id' => $id);
			$this->delete("encore",$where);	
		}

		
	}

?>