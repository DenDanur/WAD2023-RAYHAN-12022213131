<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$koneksi = mysqli_connect("localhost","root","","modul3_wad");

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

if ($koneksi) {
    
}else{
    echo "
    <script> alert('GAGAL TERHUBUNG KE DATABASE')
    </script>
    ";
}

// 

function query($query){
    global $koneksi;

    $hasil = mysqli_query($koneksi,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;
}
?>