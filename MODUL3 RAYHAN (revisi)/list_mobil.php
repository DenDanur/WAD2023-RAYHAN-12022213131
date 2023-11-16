<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            $select = "SELECT * FROM showroom_mobil";
            $mobil = query($select);

            
            

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->



            
            







            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            
            

            
            
            //<!--  **********************  2  **************************     -->
            ?>
            <table class="table">
                <tr>
                    <th>NAMA MOBIL </th>
                    <th>MEREK MOBIL </th>
                    <th>WARNA MOBIl </th>
                    <th>TIPE MOBIL </th>
                    <th>HARGA MOBIL </th>
                    <th>DETAIL</th>
                </tr>
                <?php foreach ($mobil as $row) : ?>
                <tr>
                    <?php $row["id"];?>
                    <td><?= $row["nama_mobil"];?></td>
                    <td><?= $row["brand_mobil"];?></td>
                    <td><?= $row["warna_mobil"];?></td>
                    <td><?= $row["tipe_mobil"];?></td>
                    <td><?= $row["harga_mobil"];?></td>
                    <td><a href="form_detail_mobil.php?id=<?= $row["id"];?>">DETAIL MOBIL</a></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </center>
</body>
</html>