<?php
session_start();

$hobi = $_POST['hobi'];
$_SESSION["hobi"] = $hobi;


echo"
    <form action='soal2b.php' method='POST'>
    <table border='0'>
        <tr>
            <td>
                <label for='hobi'>Nama : </label>
            </td>
            <td>
                $_SESSION[real_name]
            </td>
        </tr>
        <tr>
            <td>
                <label for='hobi'>Umur : </label>
            </td>
            <td>
                $_SESSION[age]
            </td>
        </tr>
        <tr>
            <td>
                <label for='hobi'>Hobi : </label>
            </td>
            <td>
                $_SESSION[hobi]
            </td>
        </tr>
    </table>
    </form> 
";

?>