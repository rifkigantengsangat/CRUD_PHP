<?php
require_once 'functions.php';
if(isset($_POST["submit"])){
    
if(tambah($_POST) >0 ){
    echo "
    <script>
    
    alert('data berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>
    ";
}else{
    echo "
    <script>
    alert('data tidak berhasil ditambahkan');
    document.location.href = 'index.php';
    </script>";
}
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form method="post" action="">
        <ul>
            <li>
                <label for="nama">Nama</label>
                <input type='text' name='nama' id='nama' required />
            </li>
            <li>
            <label for="nis">nis</label>
            <input type='text' name='nis' id='nis' required/>
            </li>
            <li>
            <label for="email">email</label>
            <input type='text' name='email' id='email' required />
            </li>
            <li>
            <label for="jurusan">jurusan</label>
            <input type='text' name='jurusan' id='jurusan' required/>
            </li>
            <li>
            <label for="gambar">gambar</label>
            <input type='text' name='gambar' id='gambar' required/>
            </li>
            <li>
                <button type='submit' name='submit'>Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>