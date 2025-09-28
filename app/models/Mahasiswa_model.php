<?php
  class Mahasiswa_model {
    private $mahasiswa = [
      [
        "nama"  => "Budi",
        "email" => "budi@example.com",
        "telp"  => "081234567890"
      ],
      [
        "nama"  => "Siti",
        "email" => "siti@example.com",
        "telp"  => "081298765432"
      ],
      [
        "nama"  => "Andi",
        "email" => "andi@example.com",
        "telp"  => "082112223334"
      ],
    ];

    public function getMahasiswa(){
      return $this->mahasiswa;
    }
    
  }
?>