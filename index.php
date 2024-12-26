<?php

$file = 'data.csv';

if (!file_exists($file)) {
    die("Файл не знайдено.");
}

$data = array_map('str_getcsv', file($file));

echo "<table border='1' cellspacing='0' cellpadding='5'>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>" . ($cell) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
