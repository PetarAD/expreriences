<?php
class UserModel extends CI_Model
{

  public function login($username, $password)
   {
     $this -> db -> select('username, password')
                 -> from('user')
                 -> where('username', $username)
                -> where('password', md5($password))
                -> limit(1);

     $query = $this -> db -> get();
     if($query -> num_rows() == 1) {
       return $query->row_array();
     } else {
       return false;
     }
   }
 }
