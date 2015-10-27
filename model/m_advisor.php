<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_advisor extends Core_model{
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
				$query = $this->get("advisor");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		public function get_all_advisor($limit,$offset){			
			$this->order_by("sort_order","asc");
			$this->limit($limit,$offset);
			$res=$this->get("advisor");
			return $res;
		}
		public function get_advisor_by_id($id){
			$this->where("id",$id);
			$res=$this->get("advisor");
			return $res;
		}
		public function insert_advisor($data){

			$this->insert("advisor",$data);	
		}
		public function update_advisor($data,$id){
			$where = array('id' => $id);
			$this->update("advisor",$data,$where);	
		}
		public function delete_advisor($id){
			$where = array('id' => $id);
			$this->delete("advisor",$where);	
		}

		
	}

?>