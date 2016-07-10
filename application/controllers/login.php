<?php

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login');
  }

  public function index()
  {
    $this->load->library('session');
    $username = $_POST['username'];
    $password= $_POST['password'];
    $password = md5($password);
    $this->session->set_userdata($username,$password);
    /*
    $username=$this->session->username;
  $password=$this->session->password;
*/
  }
}
//$_SESSION["username"]
//  $_SESSION["password"]
