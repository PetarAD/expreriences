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
    $username = $_POST['username'];
    $password= $_POST['password'];
    $password = md5($password);
    $_SESSION["username"]=$username;
    $_SESSION["password"]=$password;
  }
}
