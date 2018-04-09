<?php
class Upload_model extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}

	public function set_file() {
		$this->load->helper('url');

		$data = array(
			'file' => $this->input->post('userfile'),
			'name' => $this->input->post('username')
		);

		return $this->db->insert('files', $data)
	}
}

?>