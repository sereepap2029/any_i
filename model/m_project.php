<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_project extends Core_model{
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
				$this->where("project_id",$temp_id);
				$query = $this->get("project");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		public function get_all_project($start,$end,$limit,$offset,$usn="all"){
			$this->where("project_start",$start,">=");
			$this->where("project_start",$end,"<=");
			if ($usn!="all") {
				$this->where("project_ae_usn",$usn);
			}
			
			$this->order_by("project_start","desc");
			$this->limit($limit,$offset);
			$res=$this->get("project");
			return $res;
		}
		public function get_project_by_id($project_id){
			$this->where("project_id",$project_id);
			$res=$this->get("project");
			return $res;
		}
		public function insert_project($data){

			$this->insert("project",$data);	
		}
		public function update_project($data,$project_id){
			$where = array('project_id' => $project_id);
			$this->update("project",$data,$where);	
		}
		public function delete_user($project_id){
			$where = array('project_id' => $project_id);
			$this->delete("project",$where);	
		}

		
	}

?>