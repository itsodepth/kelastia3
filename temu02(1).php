<html>

    <head>
        <title>Tipe Data PHP</title>
    </head>

    <body>
        <?php
        $pembeli = "Devano Alfarizy";
        $barang = "Flashdisk";
        $harga = 55000;
        $jumlah = 3;
        $total = $harga * $jumlah;

        echo "<h1>***DATA PENJUALAN***</h1>";
        echo "<h3>Pembeli = $pembeli</br>";
        echo "Nama Barang = $barang</br>";
        echo "Harga Satuan = $harga</br>";
        echo "Jumlah Beli = $jumlah</br>";
        echo "Total Bayar [Rp] = $total</br></h3>";
        ?>
    </body>

</html>