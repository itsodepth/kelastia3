<html>

    <head>
        <title>Operator PHP</title>
    </head>

    <body>
        <?php
        $nama = "Muh Devano Alfarizy";
        $jabatan = "Manajer";
        $gaji = 10000000;
        $pajak = 0.1;
        $terima = $gaji - ($gaji*$pajak);

        echo "<h1>DAFTAR GAJI PEGAWAI</h1>";
        echo "<h3>Nama Pegawai = $nama</br>";
        echo "Jabatan = $jabatan</br>";
        echo "Gaji Pokok = $gaji</br>";
        echo "Pajak = 10% dari gaji pokok</br>";
        echo "Gaji Sebelum Pajak = Rp$gaji</br>";
        echo "Gaji Yang Diterima = Rp$terima</br>";
        ?>
    </body>

</html>