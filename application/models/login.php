<?php

class Login extends CI_Model
{
  function login($username, $password)
   {
     $this -> db -> select('username, password');
     $this -> db -> from('users');
     $this -> db -> where('username', $username);
     $this -> db -> where('password', md5($password));
     $this -> db -> limit(1);

     $query = $this -> db -> get();

     if($query -> num_rows() == 1)
     {
       return $query->result();
     }
     else
     {
       return false;
     }

}