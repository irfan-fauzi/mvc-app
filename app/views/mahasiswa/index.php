<?php
 $mahasiswa = $data['mahasiswa'];
?>

<main class="container-lg mx-auto">
  <h1>Mahasiswa page</h1>
   <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
            <li>
                <strong>Nama:</strong> <?= $mhs["nama"]; ?> <br>
                <strong>Email:</strong> <?= $mhs["email"]; ?> <br>
                <strong>Jurusan:</strong> <?= $mhs["jurusan"]; ?>
            </li>
            <br>
        <?php endforeach; ?>
    </ul>
</main>