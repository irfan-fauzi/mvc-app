<?php
  class App {
  public function __construct()
  {
    $url = $this->pareseUrl();
    var_dump($url);
  }
    
  // untuk menjalankan controller, tangkap url untuk di olah di controller
  public function pareseUrl() {
    if (isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/'); // rtrim = menghapus tanda '/' di akhir url
      $url = filter_var($url, FILTER_SANITIZE_URL); // membersihkan url dari karakter aneh
      $url = explode('/', $url); // pecah url menjadi array []
      return $url;
    }
  }
}
?>