<?php
    include './src/function/perhitungan.php';

    $path = './src/database/recipit.json';
    $jsonString = file_get_contents($path);
    $jsonData = json_decode($jsonString, true);

    $total_transaksi = perhitungan($jsonData[0]['total_qty'], $jsonData[0]['harga'] )
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transaksi</title>
        <link rel="stylesheet" href="css/transaksi.css"/>
    </head>
    <body>

        <header>
            <div class="logo">
                <h3>KET</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tambahMakanan.php">Tambah Menu</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="about_me.php">About me</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="main-content">
                <H1>Detail Pesanan</H1>
                <div class="detail-content">
                    <?php
                        foreach ($jsonData as $key => $value){
                            echo "<p> Pembeli : " . $value['nama_pembeli'] . "</p>";
                            echo "<p> Nama Makanan : " . $value['nama_makanan'] . "</p>";
                            echo "<p> Satuan : " . $value['satuan'] . "</p>";
                            echo "<p> Harga Satuan : " . $value['harga'] . "</p>";
                            echo "<p> Total Transaksi : " . $total_transaksi . "</p>";
                        }
                    
                    ?>
                </div>
            </div>
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>
</html>