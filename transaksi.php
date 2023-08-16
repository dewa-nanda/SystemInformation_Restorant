<?php
    include './src/function/perhitungan.php';

    $path = './src/database/recipit.json';
    $jsonString = file_get_contents($path);
    $jsonData = json_decode($jsonString, true);
    var_dump($jsonData);

    $total_transaksi = perhitungan($jsonData[0]['total_qty'], $jsonData[0]['harga'] )
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recipit</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>

        <header>
            <div class="logo">
                <h3>KET</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php" style="text-decoration: underline;">Home</a></li>
                    <li><a href="tambahData.php">Tambah Makanan</a></li>
                    <li><a href="read.php">Info Makanan</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="main-content">
                <H1>Detail pesanan</H1>
                <?php
                    foreach ($jsonData as $key => $value){
                        echo "<p>" . $value['nama_makanan'] . "</p>";
                        echo "<p>" . $value['satuan'] . "</p>";
                        echo "<p>" . $value['harga'] . "</p>";
                        echo "<p>" . $value['nama_pembeli'] . "</p>";
                        echo "<p>" . $total_transaksi . "</p>";
                    }
                
                ?>
            </div>
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>
</html>