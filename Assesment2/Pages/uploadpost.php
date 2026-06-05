<?php
$ukuran_maks_file = 100000; // 1MB
$tipe_file   = $_FILES['fupload']['type'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];
$folder      = './upload/';


if ($ukuran_file > $ukuran_maks_file) {
    echo "<script>alert('Ukuran file terlalu besar, pilih file lain');</script>";
    echo "<script>window.location='Main.php?Pages=upload';</script>";
} else {
    $isSuccessUpload = move_uploaded_file($lokasi_file, $folder . $nama_file);
    if ($isSuccessUpload) {
        echo "Nama File: $nama_file sukses di-upload <br>";
        echo "Ukuran File: $ukuran_file byte <br>";
    }
}

if ($tipe_file != "application/pdf" AND 
    $tipe_file != "text/plain") 
    {
    echo "<script>alert('Upload Gagal! Tipe file harus PDF atau TXT');</script>";
    echo "<script>window.location='Main.php?Pages=upload';</script>";
} else {
    $isSuccessUpload = move_uploaded_file($lokasi_file, $folder . $nama_file);
    if ($isSuccessUpload) {
        echo "Nama File: $nama_file sukses di-upload <br>";
        echo "Ukuran File: $ukuran_file byte <br>";
    }
}


?>