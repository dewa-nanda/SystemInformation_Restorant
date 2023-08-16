<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Last Project - Tambah makanan</title>
        <link rel="stylesheet" href="css/perhitungan.css" />
    </head>
    <body>

        <header>
            <div class="logo">
                <h3>KET</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tambahData.php" style="text-decoration: underline;">Tambah Makanan</a></li>
                    <li><a href="read.php">Info Makanan</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Silahkan Lakukan Penambahan makanan</h1>
            <div class="main-content">
                <form method="post" action="">
                    <table>
                        <tr>
                            <th><label for="nama">Nama Makanan</label></th>
                            <th><input type="text" name="nama" id="nama"></th>
                        </tr>
                        <tr>
                            <th><label for="harga">Harga Makanan</label></th>
                            <th><input type="number" name="harga" id="harga"></th>
                        </tr>
                        <tr>
                            <th><label for="satuan">Satuan</label></th>
                            <th><input type="text" name="satuan" id="satuan"></th>
                        </tr>
                        <br>    
                    </table>
                    <button type="submit">Tambah Makanan</button>
                </form>
            </div>
            <?php
                if(@($_POST)){
                    $file_json = file_get_contents('./src/database/dbmakanan.json');
                    $data_makanan = json_decode($file_json, true);


                    foreach ($data_makanan as $key => $value){
                        $_data_makanan[] = [
                            "nama_makanan" => $value['nama_makanan'],
                            "harga" => $value['harga'],
                            "satuan" => $value['satuan']
                        ];
                    }

                    $_data_makanan[] = [
                        'nama_makanan' => $_POST['nama'],
                        'harga' => $_POST['harga'],
                        'satuan' => $_POST['satuan'],
                    ];

                    $new_makanan = json_encode($_data_makanan, JSON_PRETTY_PRINT);
                    $file = fopen('./src/database/dbmakanan.json', 'w');
                    fwrite($file, $new_makanan);
                    fclose($file);
                    header("Location: read.php");
                    
                    // $makanan = $_POST['nama'];
                    // $harga = $_POST['harga'];
                    // $satuan = $_POST['satuan'];
                }
            ?>
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>

</html>