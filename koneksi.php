<?php
/* 
    $koneksi = new mysqli(
        "alamat_host_mysql", 
        "username_untuk_akses_mysql", 
        "password", 
        "nama_database"
    );
*/
$koneksi = new mysqli(
    "localhost",
    "root",
    "",
    "db_pplg3"
);

if ($koneksi) {
    echo "Koneksi Berhasil";
}else{
    echo mysqli_error($koneksi);
}
?>