<?php

class role extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('role_model');
                $this->load->helper('url_helper');
        }
				//check validation form for role form
			public function role(){

			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['users'] = $this->role_model->get_user();
			$data['departments'] = $this->role_model->get_filtered_departments();
		
			$this->form_validation->set_rules('type', 'type', 'required');
			$this->form_validation->set_rules('department', 'department', 'required');

				//if validation is false
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('role/role', $data);
				$this->load->view('templates/footer');
			}
			else
			{
				$data['users'] = $this->role_model->get_user();

				$this->load->view('templates/header', $data);
				$this->load->view('role/role', $data);
				$this->load->view('templates/footer');

			}
		}
}
