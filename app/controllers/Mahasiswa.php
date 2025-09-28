<?php
class Mahasiswa extends Controller {
  
  public function index($title = 'mahasiswa') {
    $data['title'] = $title;
    $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMahasiswa();
    $this->view("templates/header", $data);
    $this->view('mahasiswa/index', $data);
    $this->view("templates/footer");
  }
}
?>