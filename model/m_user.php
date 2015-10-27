<?php 
	require_once("core_model.php");
	class M_user extends Core_model{
		public function __construct(){
			parent::__construct();
		}
		public $a1=0;
		public function login_user($username,$password){
			$user=null;
			$query = "SELECT * from user where user_username = '$username' and user_password = '$password'";
			$stm=$this->db->query($query);
			$stm->execute();
			$result = $stm->fetchAll(PDO::FETCH_ASSOC);
			//print_r($result);
			if (isset($result[0])) {
				$user=$result[0];
			}
			return $user;
		}

		public function get_user_by_usn($username){
			$this->where("user_username",$username);
			$result=$this->get("user");
			if (!isset($result->result[0])) {
				$result->result[0] = array();
			}
			return $result->result[0];
		}
		public function get_user_res(){
			$this->where("user_position","RES");
			$result=$this->get("user");
			return $result->result;
		}
		public function get_user_boss(){
			$this->where("user_position","BOSS");
			$result=$this->get("user");
			return $result->result;
		}
		public function insert_user($data){

			$this->insert("user",$data);	
		}
		public function update_user($data,$usn){
			$where = array('user_username' => $usn);
			$this->update("user",$data,$where);	
		}
		public function delete_user($usn){
			$where = array('user_username' => $usn);
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