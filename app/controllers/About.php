<?php
class About extends Controller{
  public function index(){
    
     $this->view("templates/header");
    $this->view('about/index');
    $this->view("templates/footer");
    
  }
  public function page($nama = "jaya", $alamat = "papua", $email = "@asd") {
    $data["nama"] = $nama;
    $data["alamat"] = $alamat;
    $data["email"] = $email;
    $this->view("templates/header");
    $this->view('about/page', $data);
    $this->view("templates/footer");
  
    
  }
}
?>