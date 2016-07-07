<?php

class Category extends CI_Controller
{
  public function index()
  {
    $this->template->set('title', 'Категории');
    $this->template->load('layouts/default', 'category');
  }
}
