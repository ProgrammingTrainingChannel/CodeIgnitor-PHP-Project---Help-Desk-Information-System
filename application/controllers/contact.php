<?php

class contact extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('contact_model');
                $this->load->helper('url_helper');
        }
          //check form validation for contact form
		public function contact_us(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';

			$this->form_validation->set_rules('first_name', 'first_name', 'required');
			$this->form_validation->set_rules('middle_name', 'middle_name', 'required');
			$this->form_validation->set_rules('last_name', 'last_name', 'required');
			$this->form_validation->set_rules('email', 'email', 'required');
			$this->form_validation->set_rules('gender', 'gender', 'required');
			$this->form_validation->set_rules('department', 'department', 'required');
			$this->form_validation->set_rules('comment', 'comment', '');

			//if validation is false
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('contact/contact_us');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->contact_model->set_contact();
				$this->load->view('contact/success');
			}
		}
}
