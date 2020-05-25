<?php
class technicianReport_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }

     //get filtered users
public function get_filtered_users()
{
	$type = $this->session->userdata('type');

		//if the user is admin select all user username and phone
    if($type == 7){
    	$query = $this->db->query('SELECT username, phone_no FROM user');
		return $query->result();
    }
      //if the user is HW and SW team leader select all HW and SW technicians
    else if($type == 1){
    	$condition = "type =" . "'4'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result();
    }
    	//if the user is office machine team leader select all office machine technicians
    else if($type == 2){
    	$condition = "type =" . "'5'";
		$this->db->select('username, phone_no');
		$this->db->from('user');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result();
    }
    	//if the user is internet and others team leader select all internet and others technicians
   else if($type == 3){
      	$condition = "type =" . "'6'";
  		$this->db->select('username, phone_no');
  		$this->db->from('user');
  		$this->db->where($condition);

  		$query = $this->db->get();
  		return $query->result();
      }

}
  //get filtered requests
public function get_filtered_requests()
{
           //check the post username
	if($this->input->post('username')){
		$username = $this->input->post('username');



		$query = $this->db->query("SELECT request_form.* FROM `request_form` INNER JOIN assign_technician ON request_form.request_id = assign_technician.request_id WHERE assign_technician.username = " . "'" . $username  . "'");
		return $query->result_array();
	}
	else{
		$username = $this->session->userdata('username');

		$condition = "username =" . "'" . $username . "'";
		$this->db->select('*');
		$this->db->from('request_form');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result_array();
	}
	}
}
