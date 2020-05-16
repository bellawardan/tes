<?php
function printTriangle($size)
{
    $chars = '';

    for ($row = 1; $row <= $size; $row++) {
        for ($col = 0; $col < $row; $col++) {
            $chars .= '#';
        }

        $chars .= "\n";
    }

    echo $chars;
}

printTriangle(5);
echo "\nTWO TRIANGLES\n\n";
printTriangle(3);
?>