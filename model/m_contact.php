<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_contact extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}
		public function get_contact(){			
			$res=$this->get("contact");
			return $res;
		}
		public function get_contact_by_id($id){
			$this->where("id",$id);
			$res=$this->get("contact");
			return $res;
		}
		public function insert_contact($data){

			$this->insert("contact",$data);	
		}
		public function update_contact($data){
			$where = array('id' => "1");
			$this->update("contact",$data,$where);	
		}
		public function delete_contact($id){
			$where = array('id' => $id);
			$this->delete("contact",$where);	
		}

		
	}

?>