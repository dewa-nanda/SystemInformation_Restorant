<?php 
    include './src/function/perhitungan.php';
    $makanan = $_GET['nama'];
    $harga = $_GET['harga'];
    $satuan = $_GET['satuan'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
        <link rel="stylesheet" href="css/order.css"/>
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
                <H1>Rekap Pesanan</H1>
                <form method="post" action="">
                    <table>
                        <tr>
                            <td>Nama pemesan</td>
                            <td>
                                <input type="text" name="nama_pemesan" id="nama_pemesan">
                            </td>
                        </tr>
                        <tr>
                            <td>Nama makanan</td>
                            <td>
                                <input type="text" name="makanan" id="makanan" value="<?php echo $makanan?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>satuan</td>
                            <td>
                                <input type="text" name="satuan" id="satuan" value="<?php echo $satuan?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>harga</td>
                            <td>
                                <input type="number" name="harga" id="harga" value="<?php echo $harga?>" disabled>
                            </td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td>
                                <input type="number" name="qty" id="qty">
                            </td>
                        </tr>
                    </table>
                    <div class="container_btn">
                        <button type="submit">Order</button>
                    </div>
                </form>
            </div>
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
        <?php
            if(@($_POST)){
                $path = './src/database/recipit.json';
                $nama_pemesan = $_POST['nama_pemesan'];
                $qty = $_POST['qty'];
                $total = perhitungan($qty, $harga);
                $jsonData = [
                    [
                        "nama_makanan" => $makanan,
                        "harga" => $harga,
                        "satuan" => $satuan,
                        "nama_pembeli" => $nama_pemesan,
                        "total_qty" => $qty
                    ]
                ];
                $jsonString = json_encode($jsonData, JSON_PRETTY_PRINT);
                $fp = fopen($path, 'w');
                fwrite($fp, $jsonString);
                fclose($fp);

                header("Location: transaksi.php");
            }
        ?>
    </body>
</html>