<?php
session_start();

//Membuat koneksi ke database
$conn = mysqli_connect ("localhost","root","","Perpustakaan");

//Menambah buku baru
if(isset($_POST['addnewbuku'])){
    $Nama_Buku = $_POST['Nama_Buku'];
    $Keterangan = $_POST['Keterangan'];
    $Stok_Buku = $_POST['Stok_Buku'];
    
    $addtotable = mysqli_query ($conn,"insert into stok_buku(Nama_Buku,Keterangan,Stok_Buku) values('$Nama_Buku','$Keterangan','$Stok_Buku')");
    if ($addtotable){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}
?>