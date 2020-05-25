<?php
class contact_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		//insert data into a database
		public function set_contact()
		{
			//$this->load->helper('url');

			//$slug = url_title($this->input->post('title'), 'dash', TRUE);

			$data = array(
				'first_name' => $this->input->post('first_name'),
				'middle_name' => $this->input->post('middle_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'gender' => $this->input->post('gender'),
				'department' => $this->input->post('department'),
				'comment' => $this->input->post('comment')
			);
			return $this->db->insert('contact_us', $data);
		}
}
