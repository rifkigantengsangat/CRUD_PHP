<?php

$connect = mysqli_connect("localhost","root","","phpdasar");

function query ($query){
    global $connect;
    $result = mysqli_query($connect,$query);
    $rows = [];
    while ($row = mysqli_fetch_object($result)){
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data){
    global $connect;
    $nama = htmlspecialChars($data["nama"]);
    $nis =htmlspecialChars($data["nis"]);
    $email = htmlspecialChars($data["email"]);
    $jurusan = htmlspecialChars($data["jurusan"]);
    $gambar = htmlspecialChars($data["gambar"]);


    
$query = "INSERT INTO siswa 
VALUES
('','$nama','$nis','$email','$jurusan','$gambar')
";
mysqli_query($connect,$query);

return mysqli_affected_rows($connect);
}

function hapus($id){
    global $connect;
    mysqli_query($connect,"DELETE FROM siswa WHERE ID=$id");
    
    return mysqli_affected_rows($connect);
}


?>