<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Auth extends REST_Controller {

    function __construct($config='rest') {
        parent::__construct($config);
        $this->load->database();
        $this->load->model('m_auth');
    }

    function index_post()
    {
        $email = $this->input->post('email');
        $pass = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($pass)
            );
        $cek = $this->m_auth->cek_login("users", $where)->num_rows();
        if($cek > 0){
            $data = $this->db->where('email', $email)
                             ->get('users')
                             ->result();
            $this->response(array('status' => 200,'data' => $data, 'msg' => 'success'));
        } else {
            $this->response(array('status' => 401, 'msg' => 'user not found'));
        }
    }

}

/* End of file Auth.php */
