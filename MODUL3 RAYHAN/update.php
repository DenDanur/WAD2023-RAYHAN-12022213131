<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require 'connect.php';

// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET["id"];

    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
    
    $mahasiswa = query("SELECT * FROM tb_mahasiswa WHERE id = '$id'")[0];

    $nama = $_POST ["nama_mobil"];
    $merek = $_POST ["brand_mobil"];
    $warna = $_POST ["warna_mobil"];
    $tipe = $_POST ["tipe_mobil"];
    $harga = $_POST ["harga_mobil"];

        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil

    $update = "UPDATE showroom_mobil SET nama_mobil = '$nama',
                merek_mobil = '$merek',
                warna_mobil = '$warna',
                tipe_mobil = '$tipe',
                harga_mobil = '$harga'
                WHERE id = '$id'
    ";

        // Eksekusi perintah SQL
        $hasil = mysqli_query($koneksi,$update);

        // Buatkan kondisi jika eksekusi query berhasil
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

        if ($hasil) {
            
        }else {
            echo "
            <script> alert('DATA GAGAL DI UBAH')
            </script>
            ";
        }

    // Panggil fungsi update dengan data yang sesuai

// Tutup koneksi ke database setelah selesai menggunakan database

?>