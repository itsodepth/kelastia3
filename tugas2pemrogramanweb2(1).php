<html>

    <head>
        <title>TOKO SPAREPART & AKSESORIS MOTOR</title>
    </head>

    <body>
        <?php
        $nama_pembeli = "Devano Alfarizy";
        $id = "0001";
        $nama_brg = "Ban Motor";
        $harga = 200000;
        $jumlah_beli = 2;
        $total = $harga * $jumlah_beli;

        echo "<h2>TOKO SPAREPART & AKSESORIS MOTOR<br>";
        echo "TOKO DEVANO</h2>";
        echo "====================================<br>";
        echo "<h4>Nama Pembeli : $nama_pembeli<br><br>";
        echo "ID Barang : $id<br><br>";
        echo "Nama Barang : $nama_brg<br><br>";
        echo "Harga Satuan : $harga<br><br>";
        echo "Jumlah Beli : $jumlah_beli<br><br>";
        echo "Total Bayar : $total<br></h4>";
        echo "-------------------------------------------------------------<br>";
        echo "<h4>Total Pembayaran Rp$total<br><br>";
        echo "Kasir,<br>";
        echo "DEVANO ALFARIZY<br></h4>";


        ?>
    </body>

</html>