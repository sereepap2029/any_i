<?php 
	require_once("core_model.php");
	class M_user extends Core_model{
		public function __construct(){
			parent::__construct();
		}
		public $a1=0;
		public function login_user($username,$password){
			$this->where("username",$username);
			$this->where("password",$password);
			$result=$this->get("user");
			if (!isset($result->result[0])) {
				$result->result[0] = array();
			}
			return $result->result[0];
		}

		public function get_user_by_usn($username){
			$this->where("username",$username);
			$result=$this->get("user");
			if (!isset($result->result[0])) {
				$result->result[0] = array();
			}
			return $result->result[0];
		}
		public function insert_user($data){

			$this->insert("user",$data);	
		}
		public function update_user($data,$usn){
			$where = array('username' => $usn);
			$this->update("user",$data,$where);	
		}
		public function delete_user($usn){
			$where = array('username' => $usn);
			$this->delete("user",$where);	
		}
		public function get_all($offset=0,$limit=1000){

			$query = "SELECT * from user LIMIT $limit OFFSET $offset";
			$stm=$this->db->query($query);
			$stm->execute();
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
			//print_r($result);
			return $result;
		}

		
	}

?>