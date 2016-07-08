<?php

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function login()
  {
    // $username = $_POST['username'];
    // $password = $_POST['password'];
    $result = $this->UserModel->login('new', 'new');
    var_dump($result);
    if ($result) {

    }
    die;
    // $_SESSION["username"]=$username;
    // $_SESSION["password"]=$password;

    // $data = [
    //   'query' => $this->UserModel->login()
    // ];

    //  redirect('/', 'refresh');

  }
}
