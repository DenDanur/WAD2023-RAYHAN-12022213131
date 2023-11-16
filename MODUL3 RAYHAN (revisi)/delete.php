<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa

require 'connect.php';

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
$id = $_GET["id"];

$delete = "DELETE  FROM showroom_mobil WHERE id = '$id'";

$hasil = mysqli_query($koneksi,$delete);

if ( $hasil ) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = 'list_mobil.php';
    </script>
    ";
}else {
    echo "
    <script>
        alert('DATA GAGAL DIHAPUS');
        document.location.href = 'form_detail_mobil.php';
    </script>
    ";
}



    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil

    // (4) Buatkan perkondisi jika eksekusi query berhasil

// Tutup koneksi ke database setelah selesai menggunakan database

?>