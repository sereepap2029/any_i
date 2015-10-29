<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_banner extends Core_model{
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
				$query = $this->get("banner");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		
		public function get_all_banner($limit,$offset){			
			$this->order_by("sort_order","asc");
			$this->limit($limit,$offset);
			$res=$this->get("banner");
			return $res;
		}
		
		public function get_banner_by_id($id){
			$this->where("id",$id);
			$res=$this->get("banner");
			return $res;
		}
		public function insert_banner($data){

			$this->insert("banner",$data);	
		}
		public function update_banner($data,$id){
			$where = array('id' => $id);
			$this->update("banner",$data,$where);	
		}
		public function delete_banner($id){
			$where = array('id' => $id);
			$this->delete("banner",$where);	
		}
		
	}

?>