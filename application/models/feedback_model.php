<?php
class feedback_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }
		   //insert data into  request_feedback table
		public function set_feedback()
	{
			 $data = array(
			'username' => $this->session->userdata('username'),
			'request_id' => $this->input->post('request_id'),
			'feedback_id' => $this->input->post('feedback_id'),
			'feedback_date' => $this->input->post('feedback_date'),
			'feedback' => $this->input->post('feedback')
			);
			return $this->db->insert('request_feedback', $data);
	}
       //shows requests of the loged user
	public function get_requests()
{
	$username = $this->session->userdata('username');

    $condition = "username =" . "'" . $username . "'";

    $this->db->select('*');
    $this->db->from('request_form');
    $this->db->where($condition);

    $query = $this->db->get();
	return $query->result_array();
}

         //shows the filtered feedbacks
	public function get_feedbacks()
    {
    	$username = $this->session->userdata('username');
    	$type = $this->session->userdata('type');
             //if user is admin shows all feedbacks
          if($type == 7){
          $query = $this->db->query("SELECT * FROM request_feedback ");
          return $query->result_array();
          }
             //if user is team leader it shows feedbacks submitted for related requests
          else if(($type == 4) || ($type == 5) || ($type == 6)){
			$query = $this->db->query("SELECT DISTINCT request_feedback.* FROM request_feedback INNER JOIN assign_technician ON request_feedback.request_id = assign_technician.request_id WHERE assign_technician.username = " . "'" . $username  . "'");
			return $query->result_array();
			}
			  //if user is technician it shows feedbacks submitted for he is assigned requests
          else if(($type == 1) || ($type == 2) || ($type == 3)){
			$query = $this->db->query("SELECT DISTINCT request_feedback.* FROM request_feedback INNER JOIN request_form ON request_feedback.request_id = request_form.request_id WHERE request_form.problem = " . "'" . $type  . "'");
			return $query->result_array();
			}
			   //else it shows feedbacks for users by filtering from request which there are submitting
          else{
			$query = $this->db->query("SELECT DISTINCT request_feedback.* FROM request_feedback INNER JOIN request_form ON request_feedback.request_id = request_form.request_id WHERE request_form.username = " . "'" . $username  . "'");
			return $query->result_array();
			}
    }


  //it shows filtered requests
public function get_filtered_requests()

{
	$username = $this->session->userdata('username');
	$type = $this->session->userdata('type');
	    //if user is user it shows his requests
	if($type == 0){
    	$query = $this->db->query("SELECT * FROM `request_form` WHERE username = " . "'" . $username  . "'");
		return $query->result_array();
	}
	   //if user is admin it shows all requests
	else if($type == 7){
    		$query = $this->db->query("SELECT * FROM `request_form`");
    		return $query->result_array();
    	}
    	//if user is HW nd SW team leader it shows HW and SW requests
	else if($type == 1){
		$condition = "problem =" . "'1'";
		$this->db->select('*');
		$this->db->from('request_form');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result_array();
	}
	   //if user is office machine team leader it shows office machine requests
	else if($type == 2){
    		$condition = "problem =" . "'2'";
    		$this->db->select('*');
    		$this->db->from('request_form');
    		$this->db->where($condition);
    		$query = $this->db->get();
    		return $query->result_array();
    	}
    	   //if user is internet and other team leader it shows only internet and other requests
	else if($type == 3){
    		$condition = "problem =" . "'3'";
    		$this->db->select('*');
    		$this->db->from('request_form');
    		$this->db->where($condition);
    		$query = $this->db->get();
    		return $query->result_array();
    	}
    	  //else it shows requests for technicians which assigned for theme
	else {
			$username = $this->session->userdata('username');

			$query = $this->db->query("SELECT request_form.* FROM `request_form` INNER JOIN assign_technician ON request_form.request_id = assign_technician.request_id WHERE assign_technician.username = " . "'" . $username  . "'");
			return $query->result_array();
					}
}
}
