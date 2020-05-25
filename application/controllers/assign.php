<?php

class assign extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('assign_model');
                $this->load->model('technicianReport_model');
                $this->load->helper('url_helper');
        }

            //validation function for assign form
		public function assign(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['message'] = '';
			$data['requests'] = $this->assign_model->get_filtered_requests();
			$data['users'] = $this->assign_model->get_filtered_users();

			$data['request_idErr'] = '';
			$data['usernameErr'] = '';
			$data['assign_dateErr'] = '';

			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('request_id', 'request_id', 'required');
			$this->form_validation->set_rules('assign_date', 'assign_date', 'required');


               //checks if the form is not gate post data
			if ($this->form_validation->run() === FALSE)
			{
			    if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
			    {
			    	if(empty($this->input->post('request_id')))//it checks if request_id is empty
					{
						$data['request_idErr'] = "Request Id Is Required";
					}
					else if(empty($this->input->post('username')))//it checks if username is empty
					{
						$data['usernameErr'] = "Select One Technician";
					}
					else if($this->input->post('username') == "0")//it checks if username is empty
					{
						$data['usernameErr'] = "Select One Technician";
					}
			    	else if(empty($this->input->post('assign_date')))//it checks if username is empty
					{
						$data['assign_dateErr'] = "Assign Date Is Required";
					}

			    }

				$this->load->view('templates/header', $data);
				$this->load->view('assign/assign', $data);
				$this->load->view('templates/footer');
			}
			else
			{

				if($this->input->post('username') == "0")//it checks if username is empty by comparing with the string
					{
						$data['usernameErr'] = "Select One Technician";
						$this->load->view('templates/header', $data);
						$this->load->view('assign/assign', $data);
						$this->load->view('templates/footer');
					}
				else
				{
					$this->assign_model->set_assign();
					$data['message'] = "Your Assigned A Technician Successfully";
					$this->load->view('templates/header', $data);
					$this->load->view('assign/assign', $data);
					$this->load->view('templates/footer');
				}
			}
		}

		//get get_filtered_requests from assign model
		public function view()
        {
                $data['requests'] = $this->assign_model->get_filtered_requests();

        }
}
