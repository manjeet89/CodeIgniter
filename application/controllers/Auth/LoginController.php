<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Usermodel');
       
       
    }

    public function index(){
        $this->load->view('auth/login');
     
    }

    public function login()
    {
        $this->form_validation->set_rules('username','UserName','trim|required|alpha_numeric');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run()==FALSE){
            $this->index();
        }
        else{
           
            // $data=array(
            //     'username'=>$this->load->post('username'),
            //     'password'=>md5($this->input->post('password'))
            // );
            // echo $data['username'];

            $data =[
              
                'username'=>$this->input->post('username'),
               
                'password'=>md5($this->input->post('password'))
            ];
          //  echo $data['password'];


            $user = new Usermodel;
            $result = $user->loginUser($data);
            if($result != FALSE)
            {
               
                $auth_userdata= [
                    'full_name'=>$result->full_name,
                    'username'=>$result->username,
                    'mobile_number'=>$result->mobile_number,
                    'email'=>$result->email
                ];
                $this->session->set_userdata('authenticated','1');
                $this->session->set_userdata('auth_user',$auth_userdata);
                $this->session->set_flashdata('status', 'you are login successfully');
                redirect(base_url('Auth/UserPage/userpageshow'));



            }
            else{
                $this->session->set_flashdata('status', 'Invalid Username  or Password');
                redirect(base_url('login'));
            }
        }

    }
}