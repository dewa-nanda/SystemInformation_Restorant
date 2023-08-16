<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Last Project</title>
        <link rel="stylesheet" href="css/read.css" />
    </head>
    <body>

        <header>
            <div class="logo">
                <h3>KET</h3>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="tambahData.php">Tambah Makanan</a></li>
                    <li><a href="read.php" style="text-decoration: underline;">Info Makanan</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Daftar Menu</h1>
            <div class="main-content">
                <table>
                    <tr>
                        <td>No</td>
                        <td>Nama Makanan</td>
                        <td>Satuan</td>
                        <td>Harga</td>
                        <td>Action</td>
                    </tr>

                    <?php
                        $file_json = file_get_contents('dbmakanan.json');
                        $data_makanan = json_decode($file_json, true);
                        // <td><a href="order.php?nama = $value['nama_makanan]">Pesan</a></td>
                        foreach ($data_makanan as $key => $value){
                            echo '<tr>';
                                $number = $key + 1;
                                echo "<td>" . $number . "</td>";
                                echo "<td>" . $value['nama_makanan'] . "</td>";
                                echo "<td>" . $value['satuan'] . "</td>";
                                echo "<td>" . $value['harga'] . "</td>";
                                echo "<td><a href='order.php?nama=". $value['nama_makanan'] . "&harga=". $value['harga'] . "&satuan=". $value['satuan'] ."'>Pesan</a></td>";
                            echo '</tr>';
                        }
                    ?>
                </table>                
                <a href="tambahData.php" class="btn_add"><button>Tambah Data</button></a>
            </div>
            
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>
</html>