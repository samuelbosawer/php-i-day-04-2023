<?php
    $servename = "localhost";
    $username ="root";
    $password ="";
    $database ="php-day-04";

    $koneksi = mysqli_connect($servename, $username, $password, $database);

    if($_POST)
    {
        $nama = $_POST['nama'];
        $alamat_jalan = $_POST['alamat_jalan'];
        $alamat_distrik = $_POST['alamat_distrik'];
        $jk = $_POST['jk'];
    
        $query = "INSERT INTO `anggota` (`id`, `nama`, `jk`, `alamat_jalan`, `alamat_distrik`) VALUES (NULL, '$nama', '$jk', '$alamat_jalan', '$alamat_distrik')";
        mysqli_query($koneksi, $query);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 04 </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-teal-100">
    <div class="mt-10 ml-10 mb-10">
        <h1 class="font-mono text-2xl mb-10 font-bold text-blue-600"> &#60;/&#62;&#62; Tambah Data Anggota Komunitas SaCode</h1>
        <a href="index.php" class=" bg-black text-white p-3 font-bold rounded-lg">Kembali</a>
      
        <!-- Form Input -->
        <form action="" method="post" class="mt-10">
                <div class="mt-3">
                    <label class="font-bold">Nama Lengkap</label>
                    <input required type="text" id="nama" class="p-3 rounded-lg" placeholder="masukan nama" name="nama">
                </div>
                <div class="mt-3">
                    <label for="jk" class="font-bold">Jenis Kelamin</label>
                    <select name="jk" id="jk" class="p-3" required>
                        <option> Pilih Jenis Kelamin </option>
                        <option value="L"> Laki-laki </option>
                        <option value="P"> Perempuan </option>
                    </select>
                <div class="mt-3">
                    <label for="alamat_jalan" class="font-bold">Alamat Jalan</label>
                    <textarea required name="alamat_jalan" id="alamat_jalan" cols="30" rows="10"></textarea>
                </div>

                <div class="mt-3">
                    <label for="alamat_distrik" class="font-bold">Alamat Distrik</label>
                    <select required name="alamat_distrik" id="alamat_distrik" class="p-3">
                        <option> Pilih Distrik</option>
                        <option value="Abepura"> Abepura </option>
                        <option value="Abe Pantai"> Abe Pantai </option>
                        <option value="Hedam"> Hedam </option>
                    </select>
            <br>
                <button class=" bg-black text-white p-3 font-bold rounded-lg"> Simpan </button>
                
        </form>        
    </div>
</body>
</html>