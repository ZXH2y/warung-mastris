<?php

try{
    $connection = mysqli_connect("localhost", "andri", "223280019", "warung_mastris");
    echo "koneksi berhasil";
} catch(Exception $error){
    echo "Koneksi gagal: " . $error->getMessage();
}

?>