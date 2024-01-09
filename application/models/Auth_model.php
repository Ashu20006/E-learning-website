<?php
class Auth_model extends CI_model
{
   public function create($formArray)
   {
    $this->db->insert('users',$formArray);
   } 

   public function show()
   {
      $result= $this->db->get('users')->result_array();
      return $result;
   }
   public function isUserValid($email,$password)
   {
    $this->db->select('*')->from('users');
    $this->db->where('email',$email);
    $this->db->where('password',$password);
     return $this->db->get()->row();

   //  if($user_data)
   //  {
   //    $this->user_data = $user_data;
   //    return true;
   //  }
   //  else{
   //    return false;
   //  }

   // }
   // public function getValidUserdata()
   // {
   //    return $this->user_data;
 }

  
 public function table()
    {
       
        
      //  $result=$this->db->select('number');
       $result= $this->db->get('users')->result_array();
        return $result;
    }
}

?>
