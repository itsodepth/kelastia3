<html>

    <head>
        <title>Gaji Karyawan</title>
    </head>

    <body>
        <?php
        $id = "0001";
        $nama = "Muh Devano Alfarizy";
        $jam_kerja = 8;
        $gaji_pokok = 70000;
        $pajak = 0.1;
        $gaji_kotor = $gaji_pokok * $jam_kerja;
        $gaji_bersih = $gaji_kotor - ($gaji_kotor * $pajak);

        echo "<h2>PT. TSELALOE OEN TOENK<br>";
        echo "Jl. Tselalu Bahagia No. 13<br>";
        echo "Klaten</h2>";
        echo "===========================<br>";
        echo "<h3>ID Karyawan : $id<br>";
        echo "Nama Karyawan : $nama<br>";
        echo "Gaji Pokok : Rp$gaji_pokok<br>";
        echo "Jam Kerja : $jam_kerja jam sehari<br>";
        echo "Gaji Kotor : Rp$gaji_kotor<br>";
        echo "Gaji Bersih : Rp$gaji_bersih<br></h3>";
        echo "-----------------------------------------------<br>";
        echo "<h3>Total Gaji Bersih Karyawan Rp$gaji_bersih<br></h3>";
        ?>
    </body>

</html>