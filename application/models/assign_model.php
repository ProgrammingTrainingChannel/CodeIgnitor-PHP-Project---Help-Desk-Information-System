<?php
class assign_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
				$this->load->library('session');
        }

		//insert data into assign technician table
		public function set_assign()
	{
		   $data = array(
			'username' => $this->input->post('username'),
			'request_id' => $this->input->post('request_id'),
			'assign_date' => $this->input->post('assign_date'),
			'remark' => $this->input->post('remark')
		);
			return $this->db->insert('assign_technician', $data);
}

//shows filtered requests
public function get_filtered_requests()

{
	$type = $this->session->userdata('type');

	//if user is admin show all requests
    if($type == 7){
    	$query = $this->db->query('SELECT * FROM request_form');
		return $query->result_array();
    }
    //if user is HW and SW team leader show HW and SW requests
    else if($type == 1){
    	$condition = "problem =" . "'1'";
		$this->db->select('*');
		$this->db->from('request_form');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result_array();
    }
	//if user is office machine team leader show office machine requests
    else if($type == 2){
    	$condition = "problem =" . "'2'";
		$this->db->select('*');
		$this->db->from('request_form');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result_array();
    }
	//if user is internet and other team leader show internet and other requests
     else if($type == 3){
			$condition = "problem = '3'";
			$this->db->select('*');
			$this->db->from('request_form');
			$this->db->where($condition);

			$query = $this->db->get();
			return $query->result_array();
		}
		//else display nothing
		else{
			$condition = "problem =" . "'35'";
			$this->db->select('*');
			$this->db->from('request_form');
			$this->db->where($condition);

			$query = $this->db->get();
			return $query->result_array();
		}

}



public function get_filtered_users()
{
	$type = $this->session->userdata('type');

    if($type == 7){
    	$query = $this->db->query('SELECT username, phone_no FROM user');
		return $query->result();
    }
    else if($type == 1){
    	$condition = "type ='4' OR type = '1'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result();
    }
    else if($type == 2){
    	$condition = "type ='5' OR type ='2'";
		$this->db->select('username, phone_no');
		$this->db->from('user');
		$this->db->where($condition);

		$query = $this->db->get();
		return $query->result();
    }
   else if($type == 3){
      	$condition = "type ='6' OR type ='3'";
  		$this->db->select('username, phone_no');
  		$this->db->from('user');
  		$this->db->where($condition);

  		$query = $this->db->get();
  		return $query->result();
      }

}
}
