<?php
class request_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
                $this->load->library('session');
        }
		     //it insert data into request table
		public function set_request()
{
        $data = array(

				'username' => $this->session->userdata('username'),
				'office_no' => $this->input->post('office_no'),
				'block_no' => $this->input->post('block_no'),
				'request_date' => $this->input->post('request_date'),
				'problem' => $this->input->post('problem'),
				'comment' => $this->input->post('comment')
			);
			return $this->db->insert('request_form', $data);
}
}
