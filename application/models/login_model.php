<?php
class login_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

		//login function
		public function login()
		{
			$query = $this->db->get('user');
			return $query->result_array();
		}
}
