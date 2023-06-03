<?php
require 'function.php';
$makanan = mysqli_query($koneksi, "SELECT * FROM menu WHERE Jenis_Menu = 'Makanan'");
$minuman = mysqli_query($koneksi, "SELECT * FROM menu WHERE Jenis_Menu = 'Minuman'");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cetroo Cafee Cashier</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Cetroo Cafee Cashier</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Fitur Utama</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="pemesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                                Pemesanan
                            </a>
                            <a class="nav-link" href="detail.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sticky-note"></i></div>
                                Detail Pemesanan
                            </a>
                            <a class="nav-link" href="stok.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Stok Bahan
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Log Out
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-5">
                        <h1 class="mt-4">Daftar Menu Cafe</h1>
                        <ol class="breadcrumb mb-4">
                            <h4 class="breadcrumb-item active">Menu Makanan Cafe</h4>
                        </ol>
                        <div class="row">
                            <?php foreach($makanan as $mkn):?>
                            <div class="col-xl-3 col-md-6">
                            <form action="pemesanan.php" method="POST">
                                <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                <ol><?=$mkn['Nama_Menu'];?></ol>
                                <ol>Rp<?=$mkn['Harga_Menu']?></ol>
                                </div>
                                <input type = "submit" value="Tambah" name = "tambah"
                                class ="btn btn-dark"></input>
                                </div>
                            </div>
                            </form>
                            <?php endforeach;?>
                        </div>
                        <ol class="breadcrumb mb-4">
                            <h4 class="breadcrumb-item active">Menu Minuman Cafe</h4>
                        </ol>
                        <div class="row">
                            <?php foreach($minuman as $mnm):?>
                            <div class="col-xl-3 col-md-6">
                            <form action="pemesanan.php" method="POST">
                                <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">
                                <ol><?=$mnm['Nama_Menu'];?></ol>
                                <ol>Rp<?=$mnm['Harga_Menu']?></ol>
                                </div>
                                <input type = "submit" value="Tambah" name = "tambah" 
                                class ="btn btn-dark"></input>
                                </div>
                            </form>
                            </div>
                            <?php endforeach;?>
                        </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
