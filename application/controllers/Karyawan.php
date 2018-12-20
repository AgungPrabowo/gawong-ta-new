<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function index()
    {
        $data['header'] = '/layout/header';
        $data['menu']   = '/layout/menu';
        $data['footer'] = '/layout/footer';
        $data['navbar'] = '/layout/navbar';
        $data['karyawan'] = $this->db->get("karyawan");
        $data['users']   = $this->m_auth->ambilUser();
        $data['agama']  = array('islam','kristen','katolik','hindu','budha','khong hu cu');
        $data['status'] = array('lajang','menikah');
        $data['kelamin'] = array('laki-laki','perempuan');

        $this->load->view('/karyawan', $data);
    }

    function insert()
    {
        $data['user_id']        = $this->input->post('user_id');
        $data['ktp']            = $this->input->post('ktp');
        $data['nama_depan']     = $this->input->post('nama_depan');
        $data['nama_belakang']  = $this->input->post('nama_belakang');
        $data['posisi']         = $this->input->post('posisi');
        $data['phone']         = $this->input->post('phone');
        $data['jenis_kelamin']         = $this->input->post('jenis_kelamin');
        $data['agama']         = $this->input->post('agama');
        $data['status']         = $this->input->post('status');
        $data['tgl_lahir']         = $this->input->post('tgl_lahir');
        $data['alamat']         = $this->input->post('alamat');

        $this->m_karyawan->insert($data);
        $this->session->set_flashdata('info','Karyawan Berhasil ditambahkan');
        redirect('karyawan');
    }

    function edit()
    {
        $id                      = $this->input->post('id');
        $data['user_id']        = $this->input->post('user_id');
        $data['ktp']            = $this->input->post('ktp');
        $data['nama_depan']     = $this->input->post('nama_depan');
        $data['nama_belakang']  = $this->input->post('nama_belakang');
        $data['posisi']         = $this->input->post('posisi');
        $data['phone']         = $this->input->post('phone');
        $data['jenis_kelamin']         = $this->input->post('jenis_kelamin');
        $data['agama']         = $this->input->post('agama');
        $data['status']         = $this->input->post('status');
        $data['tgl_lahir']         = $this->input->post('tgl_lahir');
        $data['alamat']         = $this->input->post('alamat');

        $this->m_karyawan->edit($id,$data);
        $this->session->set_flashdata('info','Karyawan Berhasil diedit');
        redirect('karyawan');
    }

    function delete()
    {
        $id = $this->input->post('id');
		$this->m_karyawan->delete($id);
		$this->session->set_flashdata('info','karyawan Berhasil dihapus');
		redirect('karyawan');
    }


}

/* End of file Karyawan.php */
