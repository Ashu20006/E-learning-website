<?php
class Registered extends CI_controller
{

    public function table()
    {
        $this->load->model('Auth_model');

    

        $result=$this->Auth_model->table();

          $data[ 'users' ] = $result;

        $this->load->view('data',$data);

    }
}

?>

          

