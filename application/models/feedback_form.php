<?php
class feedback_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		public function set_feedback()
{
    // define variables and set to empty values
$usernameErr = $request_idErr = $feedbackErr = $feedback_dateErr  = $feedback_idErr = "";
$username = $request_id = $feedback = $feedback_id = $feedback_date =  "";
}
}