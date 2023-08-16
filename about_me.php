

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/about_me.css"/>
        <script src="https://kit.fontawesome.com/64bcad5a74.js" crossorigin="anonymous"></script>
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
                    <li><a href="about_me.php" style="text-decoration: underline;">About me</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container">
                <div class="container-image">
                    <img src="./src/img/profileDewa-removebg.png">
                </div>
                <div class="container-detail">
                    <div class="heading">
                        <h1>Dewa Putra Hernanda</h1>
                        <div class="social-media">
                            <a href="https://github.com/dewaNandaX" target="_blank" style="color:black"><i class="fa-brands fa-github"></i></a>
                            <a href="https://www.instagram.com/dewa_ndn/" target="_blank"><i class="fa-brands fa-instagram" style="color: #f00f92;"></i></a>
                            <a href="https://www.linkedin.com/in/dewa-putra-hernanda-147a99202/" target="_blank"><i class="fa-brands fa-linkedin" style="color: #005af5;"></i></a>
                        </div>
                    </div>
                    <div class="main">
                        <p>Undergraduate student at University of Ahmad Dahlan, now i focusing on front-end web and machine learning developer</p>
                        <a href="#changlog"><button>Changelog on this project</button></a>
                    </div>
                </div>
            </div>

            <div class="container-changelog" id="changlog">
                <div class="section">
                    <h2>Changelog Project Restorant</h2>
                    <?php
                        $readme = fopen('./src/readme/readme.txt', 'r');
                        while(!feof($readme)) {
                            echo '<p>'.fgets($readme) . "</p>";
                        }
                        fclose($readme);
                    ?>
                </div>
            </div>
        </main>

        <footer>
            <p>KET 2023</p>
        </footer>
    </body>
</html>