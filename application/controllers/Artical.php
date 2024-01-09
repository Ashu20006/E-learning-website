<?php
class Artical extends CI_controller
{
    public function __construct()
    {
    parent::__construct();
    }

    public function test()
    {
        $this->load->model('Artical_model');
      
        $data =[
            'name'=>'ashu',
             'a'=>39,
             'b'=>64
            ];


            $articals=$this->Artical_model->array();
            $data['res']=$articals;


            $re =$this->Artical_model->admin();
            $data[ 'resum']= $re;




            $this->load->view("test",$data);
          

          
    }

    public function hello()
    {
        echo "hii bro";
    }
}

?>

