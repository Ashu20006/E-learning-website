<?php
class Login extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->model(array('Auth_model'));
    }
    public function checkuser()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        if($this->Auth_model->isUserValid($email,$password))
        {
          // print_r($this->Auth_model->getvalidUserdata());
        //echo "valid";
         return redirect (base_url('index.php/project/result'));
         

            

            
        }
        else
        {
            // $this->session->set_flashdata('message',error_alert('invalid User or 
			//   Password'));
            echo "incorrect Userid or Password";
			   //return redirect(base_url('index.php/project/login'));
        }
      
    }
}
?>