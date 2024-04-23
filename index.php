<?php
include 'assets/data/data.php'; //Include file data.php untuk mengambil data produk
session_start(); //insialisasi session_start agar bisa menggunakan session
$username = $_SESSION['username']; //Set session username ke dalam variabel $username

if (!isset($username)) { //Jika session username tidak ada maka redirect ke halaman login.php
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dist/css/style.css" rel="stylesheet">
    <title>BUS Boy's - Home</title>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top header-scrolled">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="index.php" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span>Boy's</span>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="">Transaction</a></li>
                    <li><a class="logout scrollto" href="logout.php">Logout</a></li>
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center" style="background-image: url('assets/img/hero-img.jpg'); ">
        <div class="container">
            <div class="text-center" style="margin-bottom: 1em;">
                <h1 class="text-white">Your Journey Starts Here</h1>
                <h2 class="text-white">Explore destinations near and far with comfortable, reliable bus travel.</h2>

                <a href=" #products" class="btn btn-info mt-3 scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Explore Rute</span>
                </a>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Produk Section ======= -->
    <section id="products" class="products">
        <div class="container aos-init aos-animate">
            <header class="section-header">
                <h2>Our Bus Rute</h2>
                <p>Explore destinations near and far with comfortable</p>
            </header>

            <div class="row">
                <?php foreach ($data as $index => $produk) : ?>
                    <div class="col-lg-3 aos-init aos-animate gy-4">
                        <div class="box">
                            <img src="assets/img/products/<?= $produk['gambar'] ?>" class="w-100" alt="">
                            <h3><?= $produk['nama_produk'] ?></h3>
                            <p><?= $produk['deskripsi'] ?></p>
                            <p>
                                <strong>Price : Rp. <?= number_format($produk['harga'], 0) ?></strong>
                            </p>
                            <p>
                                <a href="transaction.php?id=<?= $index ?>" class="btn btn-primary">Check out</a>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </section>
    <!-- End Produk Section -->

    <!-- ======= Footer ======= -->
    <?php include 'partials/footer.php'; ?>
    <!-- End Footer -->

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>