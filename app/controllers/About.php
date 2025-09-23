<?php
class About {
  public function index($name, $price){
    echo 'name:'. $name. 'price:'. $price;
  }
  public function page() {
    echo 'about/page';
  }
}
?>