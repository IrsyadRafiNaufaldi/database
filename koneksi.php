<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbs = 'classicmodels';
    
    $con = mysqli_connect($host, $user, $pass, $dbs);

    if($con){
        //echo "Koneksi Berhasil ";
    }

    mysqli_select_db($con,$dbs);

?>