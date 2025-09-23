<?php

class Home extends Controller {
  public function index ($title = 'Home') {
    $data['title'] = $title;
    $this->view("templates/header", $data);
    $this->view("home/index");
    $this->view("templates/footer");
  }
}

?>