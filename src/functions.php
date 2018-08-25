<?php
// Первый задание
function task1($array, $parameter)
{
    if ($parameter == true) {
        return implode(' ', $array);
    } else {
        foreach ($array as $value) {
            echo "<p>$value</p>";
        }
    }
}
// Второе задание
