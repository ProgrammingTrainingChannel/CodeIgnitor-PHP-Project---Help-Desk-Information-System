<?php

class appointment extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('appointment_model');
                $this->load->helper('url_helper');
        }

             //creates form validation
		public function appointment()
	{
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['requests'] = $this->appointment_model->get_filtered_requests();
			$data['users'] = $this->appointment_model->get_user();
			$data['appointments'] = $this->appointment_model->get_appointments();

//
			$data['appointment_dateErr'] = '';
			$data['solving_dateErr'] = '';
			$data['request_idErr'] = '';
			$data['remarkErr'] = '';

			$this->form_validation->set_rules('appointment_date', 'appointment_date', 'required');
			$this->form_validation->set_rules('solving_date', 'solving_date', 'required');
			$this->form_validation->set_rules('remark', 'remark', 'required');
			$this->form_validation->set_rules('request_id', 'request_id', 'required');

			//checks if validation is false
		if ($this->form_validation->run() === FALSE)
		{
		   if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
		   {
		   echo $this->input->post('remark');
		   		 if (empty($this->input->post('appointment_date')))//it checks if appointment date is empty
					{
						$data['appointment_dateErr'] = "Appointment Date Is Required";
					}
				 else if (empty($this->input->post('solving_date')))//it checks if solving date is empty
					{
						$data['solving_dateErr'] = "Solving Date Is Required";
					}
				 else if (empty($this->input->post('request_id')))//it checks if request id is empty
					{
						$data['request_idErr'] = "Select One Request ID ";
					}
				 else if ($this->input->post('remark')==="")//it checks if remark is empty
					{
						$data['remarkErr'] = "Remark Is Required";
					echo $data['remarkErr'];
					}
		   }

			$this->load->view('templates/header', $data);
			$this->load->view('appointment/appointment',$data);
			$this->load->view('templates/footer');
		}
		else //if form takes value in post
		{
				//it checks if appointment date is not less than solving date
			 if($this->input->post('solving_date') < $this->input->post('appointment_date'))
				{
					$data['solving_dateErr'] = "Solving Date Not Less Than Appointment Date";
					$this->load->view('templates/header', $data);
					$this->load->view('appointment/appointment',$data);
					$this->load->view('templates/footer');
				}
			else
			{
			//
				$this->appointment_model->set_appointment();
				$this->load->view('appointment/success');
			}
		}
	}

}
