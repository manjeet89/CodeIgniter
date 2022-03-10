<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use App\libraries\Hash;
class RegisterController extends CI_Controller
  {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Usermodel');
       
       
    }
	
	public function index()
	{
       
        //$this->load->view('template/header.php');
	    $this->load->view('auth/register');
	   // $this->load->view('template/footer.php');
		
	}
    public function register()
    {
       
        $this->form_validation->set_rules('name','Full Name','trim|required');
        $this->form_validation->set_rules('username', ' UserName', 'trim|required|min_length[5]|max_length[75]|alpha_numeric|is_unique[users.username]');
        $this->form_validation->set_rules('mobile_number','Mobile Number','trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('email','Email Id','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password ','trim|required');
        $this->form_validation->set_rules('cpassword','Confirm Password','trim|required|matches[password]');
        if($this->form_validation->run()==FALSE)
        {
            $this->index();
          
        }
        else{
          $data = array(
              'full_name'=>$this->input->post('name'),
              'username'=>$this->input->post('username'),
              'mobile_number'=>$this->input->post('mobile_number'),
              'email'=>$this->input->post('email'),
              'password'=>md5($this->input->post('password'))
          );
          echo $data['password'];

        //   $this->usermodel->record_insert('users',$data);
          // $register_user = new Usermodel;
          // $checking = $register_user->registerUser($data);
          // if(!$checking)
          // {
          //     $this->session->set_flashdata('success','Register successfully.! Go to login');
          //     redirect(base_url('login'));
          // }
          // else{
          //   $this->session->set_flashdata('fail','Something wroung.!');
          //   redirect(base_url('register'));

          // }
        }
    }
}
