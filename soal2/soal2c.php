<?php
session_start();

$age = $_POST['age'];
$_SESSION["age"] = $age;

echo"
    <form action='soal2d.php' method='POST'>
    <table border='0'>
        <tr>
            <td>
                <label for='hobi'>Hobi Anda : </label>
            </td>
            <td>
                <input type='text' id='hobi' name='hobi' required>
            </td>
        </tr>
        <tr>
            <td> <input type='submit' value='Submit'> </td>
        </tr>
    </table>
    </form> 
";

?>