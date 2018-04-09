<?php
class Developers extends CI_Controller {

        public function __construct() {
                parent::__construct();
                $this->load->model('developers_model');
                $this->load->helper(array('url_helper', 'form'));
                $this->load->helper('html');
        }

        public function index() {
                $data['developers'] = $this->developers_model->get_profile();
                $data['title'] = 'Profile Archive';

                $this->load->view('templates/header', $data);
                $this->load->view('developers/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL) {

                $data['developers_info'] = $this->developers_model->get_profile($slug);
                if (empty($data['developers_info'])) {

                    show_404();
                }

                $data['title'] = $data['developers_info']['name'];

                $this->load->view('templates/header', $data);
                $this->load->view('developers/view', $data);
                $this->load->view('templates/footer');
        }

        public function create() {
            $config['upload_path']      = './uploads/developers/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg|pdf';
            $config['max_size']         = '500';
            //$config['max_width']        = '1024';
            //$config['max_height']       = '768';

            $this->load->library('upload', $config);
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');

            //print_r($_FILES);
            $this->upload->do_upload('filetoupload');
            $upload_data = $this->upload->data(); 

            $data['title'] = ucwords('register developer');

            $this->form_validation->set_rules('title',                  'Title',                'required');
            $this->form_validation->set_rules('developer_name',         'Name',                 'required|is_unique[developers.name]');
            $this->form_validation->set_rules('job_description',        'Job Description',      'required');
            $this->form_validation->set_rules('id_number',              'ID Number',            'required|is_unique[developers.id_number]');
            $this->form_validation->set_rules('phone_number',           'Phone Number',         'required|min_length[8]|max_length[13]|is_unique[developers.phone_number]');
            $this->form_validation->set_rules('email',                  'Email',                'required|valid_email|is_unique[developers.email]');
            $this->form_validation->set_rules('milestone',              'Milestone',            'required');
            
            $this->form_validation->set_rules('physical_address',       'Physical Address',     'required');

            if ($this->form_validation->run() === FALSE) {

                $this->load->view('templates/header', $data);
                $this->load->view('developers/create', $data);
                $this->load->view('templates/footer');

            } else {
                $file_name = '';
                if($upload_data) {
                    $file_name = $upload_data['file_name'];
                    $file_type = $upload_data['file_type'];
                    $file_size = $upload_data['file_size'];
                }
                else {
                   $upload_error = $this->upload->display_errors();
                }

                $this->developers_model->set_info($file_name);
                $this->load->view('developers/success');
            }
        }
}