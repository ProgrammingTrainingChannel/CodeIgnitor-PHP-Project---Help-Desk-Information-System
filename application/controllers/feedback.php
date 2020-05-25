<?php

class feedback extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('feedback_model');
                $this->load->helper('url_helper');
        }
			//check form validation form for feedback
			public function feedback(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['massage'] = '';
			$data['requests'] = $this->feedback_model->get_requests();
			$data['requests'] = $this->feedback_model->get_filtered_requests();
			$data['feedbacks'] = $this->feedback_model->get_feedbacks();

			$data['request_idErr'] = '';
			$data['feedback_dateErr'] = '';
			$data['feedbackErr'] = '';

			$this->form_validation->set_rules('request_id', 'request_id', 'required');
			$this->form_validation->set_rules('feedback_date', 'feedback_date', 'required');
			$this->form_validation->set_rules('feedback', 'feedback', 'required');

				//if form validation false it return the form
			if ($this->form_validation->run() === FALSE)
			{
				if($_SERVER["REQUEST_METHOD"] == "POST")//form is submitted with POST method
				{
				 	if (empty($this->input->post('request_id')))//it checks if request_id is empty
					{
						$data['request_idErr'] = "Request Id Is Required";
					}
					else if (empty($this->input->post('feedback_date')))//it checks if feedback_date is empty
					{
						$data['feedback_dateErr'] = "Feedback Date Is Required";
					}
					else if (empty($this->input->post('Feedback')))//it checks if Feedback is empty
					{
						$data['feedbackErr'] = "Feedback  Is Required";
					}
				}
				$this->load->view('templates/header', $data);
				$this->load->view('feedback/feedback');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->feedback_model->set_feedback();
				$data['message'] = "Your Feedback Is Sent Successfully";
				$this->load->view('templates/header', $data);
				$this->load->view('feedback/feedback');
				$this->load->view('templates/footer');
			}
		}
		//
		public function view()
        {
                $data['requests'] = $this->feedback_model->get_request();
		}
}
