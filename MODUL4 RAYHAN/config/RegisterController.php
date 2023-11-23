<?php

require 'connect.php';

// (1) Mulai session

session_start();

//

// (2) Ambil nilai input dari form registrasi

    // a. Ambil nilai input email

    $email = $_POST["email"];
    // b. Ambil nilai input name
    $nama = $_POST["name"];
    // c. Ambil nilai input username
    $username = $_POST["username"];
    // d. Ambil nilai input password
    
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
    $query = mysqli_query($koneksi,"SELECT email FROM users WHERE email = '$email'");

//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
    if (mysqli_num_rows($query) == 0) {
        
    // a. Buatlah query untuk melakukan insert data ke dalam database
        $insert = "INSERT INTO users (name,username,email,password) VALUES ('$nama','$username','$email','$password')";
        $query2 = mysqli_query($koneksi,$insert);


        if ($query2) {
            $_SESSION["message"] = "Berhasil DAFTAR";
            $_SESSION["color"] = "success";
            header ('location: ../views/login.php');
        }else {
            echo"
            <script>
            alert('GAGAL DAFTAR')
            </script>
            ";
        }


    }else {
        $_SESSION["message"] = "EMAIL SUDAH TERDAFTAR";
        header ('location: ../views/register.php');
        
    }


    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar

//

?>