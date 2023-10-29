<?php
include "koneksi.php";

if (isset($_GET['search'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $hobi = $_GET['hobi'];

    $query = "SELECT * FROM person JOIN hobi ON person.id = hobi.person_id WHERE nama LIKE '%$nama%'";

    if (!empty($_GET['alamat'])) {
        $query = "$query AND alamat LIKE '%$nama%'";
    }

    if (!empty($_GET['hobi'])) {
        $query = "$query AND hobi LIKE '%$hobi%'";
    }

    $query = mysql_query($query);
} else {
    // Menampilkan pesan jika kata kunci tidak ditemukan
    $query = mysql_query("SELECT * FROM person JOIN hobi ON person.id = hobi.person_id");
}
?>
<html>

<head>
</head>
<body>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <?php 
        while($dataPerson = mysql_fetch_array($query)){
            echo"
            <tr>
                <td>$dataPerson[nama]</td>
                <td>$dataPerson[alamat]</td>
                <td>$dataPerson[hobi]</td>
            </tr>
            ";
        }
        ?>
        </tr>
    </table>
    <br>
    <br>

    <form method="GET">
        <table border="0">
            <tr>
                <td>
                    <label for='nama'>Nama: </label>
                </td>
                <td>
                    <input type='text' id='nama' name='nama' required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='alamat'>Alamat: </label>
                </td>
                <td>
                    <input type='text' id='alamat' name='alamat'>
                </td>
            </tr>
            <tr>
                <td>
                    <label for='hobi'>Hobi: </label>
                </td>
                <td>
                    <input type='text' id='hobi' name='hobi'>
                </td>
            </tr>
            <tr>
                <td colspan="2"> 
                    <input type='submit' name="search" value='Search'> 
                </td>
            </tr>
    </form>

</body>

</html>