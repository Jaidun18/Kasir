<?php
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'kasir');
if(isset($_POST['login'])){
    //initial variable
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username' AND password='$password'");
    $hitung = mysqli_num_rows($check);

    if ($hitung>0){
    //jika datanya ada dan ditemukan, berhasil login
    $_SESSION['login'] = true;
    header('location:index.php');
    }else{
        //datanya ga ada, gagal login
        echo '
        <script>
        imap_alerts ("UserName atau Password salah")
        window.location.href="login.php"
        </script>';
    }
}



if (isset($_POST['tambahstok'])){
    $Nama_Stok = $_POST['Nama_Stok'];
    $Jumlah_Stok = $_POST['Jumlah_Stok'];
    $Deskripsi_Satuan = $_POST['Deskripsi_Satuan'];
    $Tgl_MasukStok = $_POST['Tgl_MasukStok'];

    $insert_stokbahan = mysqli_query($koneksi, "INSERT INTO stok_bahan (Nama_Stok, Jumlah_Stok, Deskripsi_Satuan, Tgl_MasukStok) 
    VALUES ('$Nama_Stok', '$Jumlah_Stok', '$Deskripsi_Satuan', '$Tgl_MasukStok')");

    if ($insert_stokbahan){
        header('location:stok.php');
    }else{
        echo '
        <script>
        imap_alerts ("Gagal Menambahkan Stok")
        window.location.href="stok.php"
        </script>';
    }
}

