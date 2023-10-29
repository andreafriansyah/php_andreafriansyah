<?php
session_start();

$real_name = $_POST['real_name'];
$_SESSION["real_name"] = $real_name;

echo"
    <form action='soal2c.php' method='POST'>
    <table border='0'>
        <tr>
            <td>
                <label for='age'>Umur : </label>
            </td>
            <td>
                <input type='number' id='age' name='age' required>
            </td>
        </tr>
        <tr>
            <td> <input type='submit' value='Submit'> </td>
        </tr>
    </table>
    </form> 
";

?>