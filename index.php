<?php
    $servename = "localhost";
    $username ="root";
    $password ="";
    $database ="php-day-04";

    $koneksi = mysqli_connect($servename, $username, $password, $database);

    // TAMPILKAN DATA
    $query = "SELECT * FROM anggota";
    $anggota = mysqli_query($koneksi, $query);
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
    <div class="mt-10 ml-10">
        <h1 class="font-mono text-2xl mb-10 font-bold text-blue-600"> &#60;/&#62;&#62; Data Anggota Komunitas SaCode</h1>
        <a href="tambah.php" class=" bg-black text-white p-3 font-bold rounded-lg">Tambah Data</a>
        <!-- TABLE -->
        <div class="table mt-10">
            <table class="border-2 border-black">
                <tr>
                    <th class="border-2 border-black p-7 text-xl bg-blue-200">No</th>
                    <th class="border-2 border-black p-7 text-xl bg-blue-200">Nama Lengkap</th>
                    <th class="border-2 border-black p-7 text-xl bg-blue-200">Jenis Kelamin</th>
                    <th class="border-2 border-black p-7 text-xl bg-blue-200">Alamat</th>
                </tr>
            <?php foreach($anggota as $da) : ?>
                <tr>
                    <td class="border-2 border-black p-3">1.</td>
                    <td class="border-2 border-black p-3"> <?php echo $da['nama']?>  </td>
                    <td class="border-2 border-black p-3"> <?= $da['jk']?></td>
                    <td class="border-2 border-black p-3"> <?= $da['alamat_jalan'] .' '. $da['alamat_distrik'] ?> </td>
                </tr>
            <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>