<?php

class sign_up extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('sign_up_model');
                $this->load->helper('url_helper');
        }
         //validation form function
		public function sign_up(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['first_nameErr'] = '';
			$data['middle_nameErr'] = '';
			$data['last_nameErr'] = '';
			$data['usernameErr'] = '';
			$data['genderErr'] = '';
			$data['phone_noErr'] = '';
			$data['passwordErr'] = '';
			$data['confirm_passwordErr'] = '';
			$data['emailErr'] = '';
			$data['departmentErr'] = '';

			$this->form_validation->set_rules('first_name', 'first_name', 'required');
			$this->form_validation->set_rules('middle_name', 'middle_name', 'required');
			$this->form_validation->set_rules('last_name', 'last_name', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('gender', 'gender', 'required');
			$this->form_validation->set_rules('phone_no', 'phone_no', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('confirm_password', 'confirm_password', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('department', 'department', 'required');
			
                //it checks if the form  is empty
			if ($this->form_validation->run() === FALSE)
			{
				if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
				{
					 if (empty($this->input->post('first_name')))//it checks if first name is empty
					{
						$data['first_nameErr'] = "First Name is Required";
					}
					//check if the name only contains letters and white spaces
					else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('first_name')))
					{
						$data['first_nameErr'] = "Only Letters and White Space Allowed";
					}

					else if (empty($this->input->post('middle_name')))//it checks if first middle name is empty
					{
						$data['middle_nameErr'] = "Middle Name is Required";
					}
					//check if the name only contains letters and white spaces
					else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('middle_name')))
					{
						$data['middle_nameErr'] = "Only Letters and White Space Allowed";
					}

					else if (empty($this->input->post('last_name')))//it checks if last name is empty
					{
						$data['last_nameErr'] = "Last Name is Required";
					}
					//check if the name only contains letters and white spaces
					else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('last_name')))
					{
						$data['last_nameErr'] = "Only Letters and White Space Allowed";
					}


					else if (empty($this->input->post('email')))//it checks if email is empty
					{
						$data['emailErr'] = "email is required";
					}
					//check if email address is correct format i.e example@example.com
					else if (!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL))
					{
					$data['emailErr'] = "Invalid Email";
					}

					else if (empty($this->input->post('phone_no')))//it checks if phone is empty
					{
						$data['phone_noErr'] = "Phone Number Is Required";
					}
					//check if the phone number is correct format
					else if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$this->input->post('phone_no')))
					{
						$data['phone_noErr'] = "Invalid Phone Number  ";
					}

					else if (empty($this->input->post('gender')))//it checks if gender is empty
					{
						$data['genderErr'] = "Gender  Is Required";
					}

					else if (empty($this->input->post('username')))//it checks if username is empty
					{
						$data['usernameErr'] = "Username Is Required";
					}

					else if (empty($this->input->post('password')))//it checks if password is empty
					{
						$data['passwordErr'] = "Password  Is Required";
					}

					else if (empty($this->input->post('confirm_password')))//it checks if confirm password is empty
					{
						$data['confirm_passwordErr'] = "Confirm Password Is Required";
					}
					//it checks if the two passwords are matching
					else if(($this->input->post('password') == $this->input->post('confirm_password')))
					{
						$data['confirm_passwordErr'] = " Password Don't Match";
					}

					else if (empty($this->input->post('department')))//it checks if department is empty
					{
						$data['departmentErr'] = "Department Is Required";
					}
				}

				$this->load->view('templates/header', $data);
				$this->load->view('sign_up/sign_up', $data);
				$this->load->view('templates/footer');
			}
			else //if form takes data
			{
			//check if email address is correct format i.e example@example.com
				if (!filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL))
				{
					$data['emailErr'] = "Invalid Email";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}
				//check if the name only contains letters and white spaces
				else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('first_name')))
				{
					$data['first_nameErr'] = "Only Letters and White Space Allowed";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}
				//check if the name only contains letters and white spaces
				else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('middle_name')))
				{
					$data['middle_nameErr'] = "Only Letters and White Space Allowed";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}
				//check if the name only contains letters and white spaces
				else if (!preg_match("/^[a-zA-Z ]*$/",$this->input->post('last_name')))
				{
					$data['last_nameErr'] = "Only Letters and White Space Allowed";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}

				//check if the phone number is correct format
				else if(!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$this->input->post('phone_no')))
				{
					$data['phone_noErr'] = "Invalid Phone Number  ";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}
				//it checks if the two passwords are matching
				else if(!($this->input->post('password') == $this->input->post('confirm_password')))
				{
					$data['confirm_passwordErr'] = " Password Don't Match";
					$this->load->view('templates/header', $data);
					$this->load->view('sign_up/sign_up', $data);
					$this->load->view('templates/footer');
				}
				else{
					$data['username'] = $this->input->post('username');
					$data['password'] = $this->input->post('password');

					$this->sign_up_model->set_sign_up();
					$this->load->view('sign_up/success', $data);
				}

			}
		}
}
