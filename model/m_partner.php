<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_partner extends Core_model{
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
				$query = $this->get("partner");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		
		public function get_all_partner($limit,$offset){			
			$this->order_by("sort_order","asc");
			$this->limit($limit,$offset);
			$res=$this->get("partner");
			return $res;
		}
		
		public function get_partner_by_id($id){
			$this->where("id",$id);
			$res=$this->get("partner");
			return $res;
		}
		public function insert_partner($data){

			$this->insert("partner",$data);	
		}
		public function update_partner($data,$id){
			$where = array('id' => $id);
			$this->update("partner",$data,$where);	
		}
		public function delete_partner($id){
			$where = array('id' => $id);
			$this->delete("partner",$where);	
		}
		
	}

?>