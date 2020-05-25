<?php
class appointment_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
		$this->load->library('session');
	}
		
	public function set_appointment()
	{
		$data = array(
		'username' => $this->session->userdata('username'),
		'appointment_date' => $this->input->post('appointment_date'),
		'solving_date' => $this->input->post('solving_date'),
		'remark' => $this->input->post('remark'),
		'request_id' => $this->input->post('request_id')
		);

		return $this->db->insert('request_appointment', $data);
	}

	public function get_appointments()
	{
		$username = $this->session->userdata('username');
		$type = $this->session->userdata('type');

		if($type == 7){
			$query = $this->db->query("SELECT * FROM request_appointment ");
			return $query->result_array();
		}
		else if(($type == 4) || ($type == 5) || ($type == 6)){
			$query = $this->db->query("SELECT DISTINCT request_appointment.* FROM request_appointment INNER JOIN assign_technician ON request_appointment.request_id = assign_technician.request_id WHERE assign_technician.username = " . "'" . $username  . "'");
			return $query->result_array();
		}
		else if(($type == 1) || ($type == 2) || ($type == 3)){
			$query = $this->db->query("SELECT DISTINCT request_appointment.* FROM request_appointment INNER JOIN request_form ON request_appointment.request_id = request_form.request_id WHERE request_form.problem = " . "'" . $type  . "'");
			return $query->result_array();
		}
		else{
			$query = $this->db->query("SELECT DISTINCT request_appointment.* FROM request_appointment INNER JOIN request_form ON request_appointment.request_id = request_form.request_id WHERE request_form.username = " . "'" . $username  . "'");
			return $query->result_array();
		}
	}

	//display users
	public function get_user()
	{
		$query = $this->db->query('SELECT username, phone_no FROM user');
		return $query->result();
	}

	//show requests filtering by there type
	public function get_filtered_requests()
	{
		$username = $this->session->userdata('username');
		$type = $this->session->userdata('type');

		//if user is admin
		if($type == 7){
			$query = $this->db->query("SELECT * FROM `request_form`");
			return $query->result_array();
		}

		else if($type == 1 || $type == 2 || $type == 3 || $type == 4 || $type == 5 || $type == 6){
			$query = $this->db->query("SELECT request_form.* FROM `request_form` INNER JOIN assign_technician ON request_form.request_id = assign_technician.request_id WHERE assign_technician.username = " . "'" . $username  . "'");
			return $query->result_array();
		}
		else{
			$condition = "username ='sampleuser'";

			$this->db->select('*');
			$this->db->from('request_form');
			$this->db->where($condition);

			$query = $this->db->get();

			return $query->result_array();
		}
	}
}
