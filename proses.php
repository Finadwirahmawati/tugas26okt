<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama=$_POST['NIK'];
    $jenis=$_POST['Jenis_Kelamin'];

    $sql="INSERT INTO tb_pembelian(NIK,Jenis_Kelamin) VALUES ('$nama','$jenis')";
    $query = mysqli_query ($db, $sql);


}
?>