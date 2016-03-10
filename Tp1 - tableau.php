<?php
function createHTMLtable($colonne,$ligne){

    echo "<table>";
    for ($i=0;$i<=$ligne;$i++){
        echo "<tr>";
        $gras="normal";
        if($i%2==0)
            $gras="bold";
        for($j=0;$j<=$colonne;$j++){
            $vert="";
            if($j%2==0)
                $vert="color:green;";
            echo "<td style='{$vert} font-weight:{$gras}'>{$i} - {$j}</td>";                       }
        echo "</tr>";
    }
    echo "</table>";
}
echo createHTMLtable(7,11);
?>
