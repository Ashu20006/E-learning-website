<?php
 class Artical_model extends CI_model
 {
    function array()
    {
    
       $articals=[
            "This is #1",
            "This is #2"
        ];
        return $articals;


    }
    public function admin()
    {
       
        
      //  $result=$this->db->select('number');
       $result= $this->db->get('ashutosh')->result_array();
        return $result;
    }
 }
?>