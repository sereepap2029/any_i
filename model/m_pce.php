<?php 
	require_once("core_model.php");
	require_once("m_stringlib.php");
	class M_pce extends Core_model{
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
				$query = $this->get("pce_doc");
				if ($query->rowCount == 0)
				{
					$id = $temp_id;
					$isuniq    = TRUE;
				}
			}
			while(!$isuniq);
		
			return $id;
		}
		public function get_all_pce($project_id){
			$this->where("project_id",$project_id);
			$this->order_by("upload_time","desc");
			$res=$this->get("pce_doc");
			return $res;
		}
		public function get_pce_by_id($id){
			$this->where("id",$id);
			$res=$this->get("pce_doc");
			return $res;
		}
		public function insert_pce($data){

			$this->insert("pce_doc",$data);	
		}
		public function update_pce($data,$id){
			$where = array('id' => $id);
			$this->update("pce_doc",$data,$where);	
		}
		public function delete_pce($id){
			$res=$this->get_pce_by_id($id);
			$result=$res->result[0];
			unlink($_SERVER["DOCUMENT_ROOT"]."/media/real_pdf/".$result['filename']);
			$where = array('id' => $id);
			$this->delete("pce_doc",$where);	
		}

		
	}

?>