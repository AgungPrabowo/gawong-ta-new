<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('/index');
    }

    function cek_login()
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
            foreach($data as $row)
            {
                // daftar kan ke session
                $sess = array('email'	    => $row->email,
                                'name'    => $row->name,
                                'role'  => $row->role_id
                                );
            }
            $this->session->set_userdata($sess);
            redirect('home/beranda');
        } else {
            $this->session->set_flashdata('info','Username atau Password salah');
			redirect('home');
        }
    }

    function beranda()
    {
        $data['header'] = '/layout/header';
        $data['menu']   = '/layout/menu';
        $data['footer'] = '/layout/footer';
        $data['navbar'] = '/layout/navbar';

        $this->load->view('/home', $data);
    }

    function logout()
    {
        $this->session->sess_destroy();
		$this->load->view('/index');
    }

}

/* End of file Home.php */
