<?php
class sign_up_model extends CI_Model {
        //
        public function __construct()
        {
                $this->load->database();
        }

		//inter data into user
		public function set_sign_up()
	{
		$data = array(
		'first_name' => $this->input->post('first_name'),
		'middle_name' => $this->input->post('middle_name'),
		'last_name' => $this->input->post('last_name'),
		'username' => $this->input->post('username'),
		'gender' => $this->input->post('gender'),
		'phone_no' => $this->input->post('phone_no'),
		'password' => $this->input->post('password'),
		'confirm_password' => $this->input->post('confirm_password'),
		'email' => $this->input->post('email'),
		'department	' => $this->input->post('department')
		);

		return $this->db->insert('user', $data);
	}
}
