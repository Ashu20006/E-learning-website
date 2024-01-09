<?php
class Auth extends CI_controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth_model');
    }

    public function register()
    {
    //  $this->load->library('form_validation');
     $this->form_validation->set_rules('first_name','First name','required');
     $this->form_validation->set_rules('last_name','Last name','required');
     $this->form_validation->set_rules('email','Email','required');
     $this->form_validation->set_rules('phone','Phone','required');
     $this->form_validation->set_rules('password','Password','required');

     if($this->form_validation->run() == false)
     {
        $this->form_validation->set_error_delimiters("<span style='color:red'>","</span>");
        $this->load->view('register.php');
     }
     else{

            $formArray=[
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),
                'email'=>$this->input->post('email'),
                'phone'=>$this->input->post('phone'),
                'password'=>md5($this->input->post('password')),
                //  'created_at'=>date(format 'Y-m-d H:i:s'),


             ];

            if( $this->Auth_model->create($formArray))
            {
               $this->session->set_flashdata('message',success_alert('user created successfully'));
               return redirect( base_url('index.php/Auth/register'));
            }
            else
            {
             // $this->session_set_flashdata('message',error_alert('oops try later'));
             return redirect(base_url('index.php/Auth/register'));
            }
     }
            
        }

        public function result()
        {
            $re =$this->Auth_model->show();
            $data[ 'resum']= $re;




            $this->load->view("data",$data);
        }
        public function isUserValid($email,$password)
        {
            $this->db->select('*')->from('users');
            $this->db->where('email',$email);
            $this->db->where('password',$password);
            $user_data = $this->db->get()->row();

            if($user_data){
                $this->user_data = $user_data;
                return true;
                
            }else{
                return false;
            }
            
        }
        public function getValidUserdata(){
            return $this->user_data;
        }
        
    }

?>
          