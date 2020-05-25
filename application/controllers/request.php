<?php

class request extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('request_model');
                $this->load->helper('url_helper');
        }
           //check validation for request form
		public function request()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');

			$data['title'] = '';
			$data['message'] = '';
			$data['usernameErr'] = '';
			$data['request_dateErr'] = '';
			$data['block_noErr'] = '';
			$data['office_noErr'] = '';
			$data['problemErr'] = '';

			$this->form_validation->set_rules('block_no', 'block_no', 'required');
			$this->form_validation->set_rules('request_date', 'request_date', 'required');
			$this->form_validation->set_rules('office_no', 'office_no', 'required');
			$this->form_validation->set_rules('problem', 'problem', 'required');

			    //if the validation is false
			if ($this->form_validation->run() === FALSE)
			{
			  if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
			  {
			  		if (empty($this->input->post('request_date')))//it checks if request_date is empty
						{
							$data['request_dateErr'] = "Request Date Is Required";
						}
					else if (empty($this->input->post('block_no')))//it checks if block_no is empty
						{
							$data['block_noErr'] = "Block Number Is Required";
						}
					else if (empty($this->input->post('office_no')))//it checks if office_no is empty
						{
							$data['office_noErr'] = "Office Number Is Required";
						}
					else if (empty($this->input->post('problem')))//it checks if problem is empty
						{
							$data['problemErr'] = "Problem  Type Is Required";
						}
					else if ($this->input->post('problem') == 0)//it checks if problem is empty
						{
							$data['problemErr'] = "Problem  Type Is Required";
						}
			  }
				$this->load->view('templates/header', $data);
				$this->load->view('request/request');
				$this->load->view('templates/footer');
			}
			else
			{
				if (empty($this->session->userdata('username')))//it checks if username is empty
				{
					$data['usernameErr'] = "Please Login First";
					$this->load->view('templates/header', $data);
					$this->load->view('request/request');
					$this->load->view('templates/footer');
				}
				else if ($this->input->post('problem') == 0)//it checks if problem is empty
				{
					$data['problemErr'] = "Problem  Type Is Required";
					$this->load->view('templates/header', $data);
					$this->load->view('request/request');
					$this->load->view('templates/footer');
				}
 				else{
					$this->request_model->set_request();
					$data['message'] = "Your Request Is Saved Successfully";
					$this->load->view('templates/header', $data);
					$this->load->view('request/request', $data);
					$this->load->view('templates/footer');
 				}
			}
		}
}
