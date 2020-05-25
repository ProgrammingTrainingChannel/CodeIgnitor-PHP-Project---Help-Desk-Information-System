<?php

class technicianReport extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('technicianReport_model');
                $this->load->helper('url_helper');
        }
           //checks validation of the form
		public function technicianReport(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = '';
			$data['users'] = $this->technicianReport_model->get_filtered_users();
			$data['requests'] = $this->technicianReport_model->get_filtered_requests();

				//if validation is false
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('technicianReport/technicianReport', $data);
				$this->load->view('templates/footer');
			}
			else{
				$data['requests'] = $this->technicianReport_model->get_filtered_requests();

				$this->load->view('templates/header', $data);
				$this->load->view('technicianReport/technicianReport', $data);
				$this->load->view('templates/footer');
			}
		}
}
