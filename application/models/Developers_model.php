<?php
class Developers_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_profile($slug = FALSE) {
            
            if ($slug === FALSE) {
                $query = $this->db->get('developers');
                return $query->result_array();
            }

            $query = $this->db->get_where('developers', array('slug' => $slug));
            return $query->row_array();
	    }

        public function set_info($filename = "") {
            $this->load->helper('url');

            $slug = url_title($this->input->post('developer_name'), 'dash', TRUE);

            $data = array(
                'img' => $filename,
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'name' => $this->input->post('developer_name'),
                'job_description' => $this->input->post('job_description'),
                'id_number' => $this->input->post('id_number'),
                'phone_number' => $this->input->post('phone_number'),
                'email' => $this->input->post('email'),
                'milestone' => $this->input->post('milestone'),
                'address' => $this->input->post('physical_address')

            );

            return $this->db->insert('developers', $data);
        }
}