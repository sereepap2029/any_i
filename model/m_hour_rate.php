<?php 
	require_once("core_model.php");
	class M_hour_rate extends Core_model{
		public function __construct(){
			parent::__construct();
		}

		public function get_by_id($id){
			$this->where("id",$id);
			$result=$this->get("hour_rate");
			if (!isset($result->result[0])) {
				$result->result[0] = array();
			}
			return $result->result[0];
		}
		public function insert_hour_rate($data){

			$this->insert("hour_rate",$data);	
		}
		public function update_hour_rate($data,$id){
			$where = array('id' => $id);
			$this->update("hour_rate",$data,$where);	
		}
		public function delete_hour_rate($id){
			$where = array('id' => $id);
			$this->delete("hour_rate",$where);	
		}
		public function get_all($offset=0,$limit=1000){

			$result=$this->get("hour_rate");
			return $result;
		}

		
	}

?>