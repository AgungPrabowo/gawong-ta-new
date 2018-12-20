<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
        $data['header'] = '/layout/header';
        $data['menu']   = '/layout/menu';
        $data['footer'] = '/layout/footer';
        $data['navbar'] = '/layout/navbar';
        $data['users']   = $this->m_auth->ambilUser();
        $this->load->view('/user', $data);
    }

}

/* End of file User.php */
