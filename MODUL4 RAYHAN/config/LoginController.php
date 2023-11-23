<?php

require 'connect.php';

// function untuk melakukan login
function login($input) {

    // (1) Panggil variabel global $db dari file config
    global $koneksi;
    
    // 

    // (2) Ambil nilai input dari form login
        // a. Ambil nilai input email
        $email = $input["email"];
        
        // b. Ambil nilai input password
        $password = $input["password"];
        
    // 

    // (3) Buat dan lakukan query untuk mencari data dengan email yang sama
        $query = "SELECT * FROM users WHERE email = '$email'";
        $hasil = mysqli_query($koneksi,$query);

    // 

    // (4) Buatlah perkondisian ketika email ditemukan ( gunakan mysqli_num_rows == 1 )

    if (mysqli_num_rows($hasil) == 1) {
        // a. Simpan hasil query menjadi array asosiatif menggunakan fungsi mysqli_fetch_assoc
        
        $row = mysqli_fetch_assoc($hasil);
        // b. Lakukan verifikasi password menggunakan fungsi password_verify
        if (password_verify($password, $row["password"])) {
            // c. Set variabel session dengan key login untuk menyimpan status login
            $_SESSION["login"] = true;
            // d. Set variabel session dengan key id untuk menyimpan id user

            $_SESSION["id"] = $row["id"];
            // e. Buat kondisi untuk mengecek apakah checkbox "remember me" terisi kemudian set cookie dan isi dengan id

            if (isset($input["remember"])) {
                setcookie("id",$row["id"], time()+30);
            }
            

        }else {
              // f. Buat kondisi else dan isi dengan variabel session dengan key message untuk meanmpilkan pesan error ketika password tidak sesuai
            $_SESSION["message"] = "PASSWORD TIDAK SESUAI";
            $_SESSION["login"] = false;
            header('location: ../views/login.php');
            exit;
        }   


    }else {
        
        $_SESSION["message"] = "EMAIL TIDAK DITEMUKAN";
        $_SESSION["login"] = false;
        header('location: ../views/login.php');
        exit;
    }



}


// function untuk fitur "Remember Me"
function rememberMe($cookie)
{
    // (6) Panggil variabel global $db dari file config

    global $koneksi;
    
    // 

    // (7) Ambil nilai cookie yang ada
    $id = $_COOKIE["id"];
    
    // 

    // (8) Buat dan lakukan query untuk mencari data dengan id yang sama
    $query = "SELECT * FROM users WHERE id = '$id'";
    $hasil = mysqli_query($koneksi,$query);    
    
    // 

    // (9) Buatlah perkondisian ketika id ditemukan ( gunakan mysqli_num_rows == 1 )
    if (mysqli_num_rows($hasil) == 1) {
        $row = mysqli_fetch_assoc($hasil);
        $_SESSION["login"] = true;
        $_SESSION["id"] = $id;
    }


    
    // 
}
// 

?>