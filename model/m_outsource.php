<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_outsource extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}	
		public function get_outsource_with_auth($auth_id){
			$this->where("auth_id",$auth_id);
			$res=$this->get("outsource");
			return $res;
		}
		public function insert_outsource($data){

			$this->insert("outsource",$data);	
		}
		public function delete_outsource($outsource_id,$auth_id){
			$where = array('auth_id' => $auth_id,'outsource_id' => $outsource_id);
			$this->delete("outsource",$where);	
		}
		
	}

?>