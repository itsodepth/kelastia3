<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Kartu Tanda Mahasiswa</title>
    </head>

    <body>
        <?php
        $nama = "Muh Devano Alfarizy";
        $nim = "230103107";
        $fakultas = "Ilmu Komputer";
        $prodi = "S1-Teknik Informatika";
        $fotourl = "img/pasfoto.png";

        echo "<table border='1' cellpadding='9' cellspacing='0'>";

        echo "<tr>";
        echo "<td colspan='3' align='center'>KARTU TANDA MAHASISWA</td>";
        echo "</tr>";

            // Baris foto dan nama
            echo "<tr>";
                echo "<td rowspan='4'>";
                    echo "<img src='$fotourl' alt='Foto Mahasiswa' width='100' height='140' align='center'>";
                    echo "</td>";
                echo "<td>Nama</td>";
                echo "<td>$nama</td>";
                echo "</tr>";

            // Baris NIM
            echo "<tr>";
                echo "<td>NIM</td>";
                echo "<td>$nim</td>";
                echo "</tr>";

            // Baris Fakultas
            echo "<tr>";
                echo "<td>Fakultas</td>";
                echo "<td>$fakultas</td>";
                echo "</tr>";

            // Baris Prodi
            echo "<tr>";
                echo "<td>Prodi</td>";
                echo "<td>$prodi</td>";
                echo "</tr>";

            echo "</table>";
        ?>

    </body>

</html>