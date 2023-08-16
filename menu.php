<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu</title>
        <link rel="stylesheet" href="css/menu.css" />
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
                    <li><a href="menu.php" style="text-decoration: underline;">Menu</a></li>
                    <li><a href="about_me.php">About me</a></li>
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
                        $file_json = file_get_contents('./src/database/dbmakanan.json');
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
                <a href="tambahMakanan.php" class="btn_add"><button>Tambah Data</button></a>
            </div>
            
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>
</html>