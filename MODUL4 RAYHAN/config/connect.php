<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$koneksi = mysqli_connect("localhost","root","","modul4");

// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

if (!$koneksi) {
    echo"
    <script>
    alert('KONEKSI GAGAL TERHUBUNG')
    </script>
    ";
}

// 
 
?>