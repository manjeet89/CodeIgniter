<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPage extends CI_Controller
{
    public function userpageshow()
    {
        $this->load->view('auth/userpageshow');

    }

    public function logout()
    {
       $this->session->unset_userdata('authentication');
       $this->session->unset_userdata('auth_user');

       $this->session->set_flashdata('status','You are Loggout successed');
       redirect(base_url('login'));


    }
}
