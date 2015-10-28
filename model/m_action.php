<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_action extends Core_model{
		public function __construct(){
			parent::__construct();
			$this->m_stringlib= new M_stringlib;
		}
		function generate_id()
		{
			$isuniq    = FALSE;
			$id = '';
			do
			{
				$temp_id = $this->m_stringlib->uniqueAlphaNum10();
				$this->where("id",$temp_id);
				$query = $this->get("action");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		function generate_pid()
		{
			$isuniq    = FALSE;
			$id = '';
			do
			{
				$temp_id = $this->m_stringlib->uniqueAlphaNum10();
				$this->where("id",$temp_id);
				$query = $this->get("action_photo");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		public function get_all_action($limit,$offset){			
			$this->order_by("sort_order","asc");
			$this->limit($limit,$offset);
			$res=$this->get("action");
			return $res;
		}
		public function get_all_action_photo($action_id){			
			$this->order_by("sort_order","asc");
			$this->where("action_id",$action_id);
			$res=$this->get("action_photo");
			return $res;
		}
		public function get_action_by_id($id){
			$this->where("id",$id);
			$res=$this->get("action");
			return $res;
		}
		public function insert_action($data){

			$this->insert("action",$data);	
		}
		public function insert_action_photo($data){

			$this->insert("action_photo",$data);	
		}
		public function update_action($data,$id){
			$where = array('id' => $id);
			$this->update("action",$data,$where);	
		}
		public function update_action_photo($data,$id){
			$where = array('id' => $id);
			$this->update("action_photo",$data,$where);	
		}
		public function delete_action($id){
			$where = array('id' => $id);
			$this->delete("action",$where);	
		}
		public function delete_action_photo($id){
			$where = array('id' => $id);
			$this->delete("action_photo",$where);	
		}
		public function get_action_by_sort_order($id){
			$this->where("sort_order",$id);
			$res=$this->get("action");
			return $res;
		}
		
	}

?>