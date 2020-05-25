<?php

class login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('login_model');
                $this->load->helper('url_helper');
				$this->load->library('session');
        }

public function login(){


	$this->load->helper('form');
	$this->load->library('form_validation');

	$data['title'] = 'welcome to login page';
	$data['usernameErr'] = '';
	$data['passwordErr'] = '';
	$data['errorMessage'] = '';

	// grab user input
	$username = $this->security->xss_clean($this->input->post('username'));
	$password = $this->security->xss_clean($this->input->post('password'));

	if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
	{
		if (empty($username))//it checks if request_date is empty
		{
			$data['usernameErr'] = "Username Is Required";
		}
		else if (empty($password))//it checks if request_date is empty
		{
			$data['passwordErr'] = "Password Is Required";
		}
	}

	// Prep the query
	$this->db->where('username', $username);
	$this->db->where('password', $password);

	$condition = "username =" . "'" . $username . "' AND " . "password =" . "'" . $password . "'";
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where($condition);
	$this->db->limit(1);
	$query = $this->db->get();

	if ($query->num_rows() == 1)
	{
			// If there is a user, then create session data
			$row = $query->row();

			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('type', $row->type);

			$username = $this->session->userdata('username');
			$type = $this->session->userdata('type');

			if($username)
			{
				$data['title'] = '';
				$this->load->view('templates/header', $data);
				$this->load->view('pages/home');
				$this->load->view('templates/footer');
			}
			else{
				$data['title'] = '';
				$this->load->view('templates/header', $data);
				$this->load->view('login/login');
				$this->load->view('templates/footer');
			}
		}
		else {
			$data['title'] = '';
			$data['errorMessage'] = "Username and/or Password is not correct";
			$this->load->view('templates/header', $data);
			$this->load->view('login/login');
			$this->load->view('templates/footer');
		}
	}

	//logout function
	public function logout()
	{
		$data['title'] = 'welcome to login page';
		$this->load->view('templates/header', $data);
		$this->load->view('login/login');
		$this->load->view('templates/footer');
		$this->session->userdata('username');
	}
}
