<?php
class role_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }

		//insert type data into user table
		public function set_role()
		{
			$data = array(
			'type' => $this->input->post('type')
			);
		$this->db->where('username', $this->input->post('username'));
		return $this->db->update('user', $data);
		}

 //it filter users by there department
public function get_filtered_departments()

{
		$type = $this->session->userdata('type');
      //if user is admin it select there department
    if($type == 7){
    	$query = $this->db->query('SELECT DISTINCT department FROM user');
		return $query->result();
		}
			//else it select nothing
		else{
        		$query = $this->db->query("SELECT * FROM `user` WHERE type = '10'");
        		return $query->result_array();
        		}

}

        //select user
	public function get_user()
	{
			$username = $this->session->userdata('username');
			$type = $this->session->userdata('type');

			$department = $this->input->post('department');

			//if user is admin select user by department
		if($type == 7){
			$query = "SELECT * FROM `user` WHERE department =" . "'" . $department . "'";
			$query = $this->db->query($query);
			return $query->result_array();
		}
		   //select nothing
		else{
			$query = $this->db->query("SELECT * FROM `user` WHERE type = '10'");
			return $query->result_array();
		}
	}
}
