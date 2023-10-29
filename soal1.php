<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";
for ($a = $jml; $a > 0; $a--) {
    $totalPerBaris = 0;
    $tableContent = "";
    $tableTotal = "";

    $tableContent .= "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        $totalPerBaris += $b;
        $tableContent .= "<td>$b</td>";
    }
    $tableContent .= "</tr>\n";
    
    $tableTotal .= "<tr>\n";
    $tableTotal .= "<td colspan='$jml'>Total : $totalPerBaris</td>";
    $tableTotal .= "</tr>\n";
    

    echo $tableTotal;
    echo $tableContent;
}
echo "</table>";

?>