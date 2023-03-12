<?php

require "dbconnect.php";
$result = $conn->query("SELECT *  FROM ads") ;
echo "<h2>Объявления</h2>";
$i = 0;
while ($row = $result->fetch()) {
    $i++;
    echo $i.")".$row['header'] . " | " . $row['text'] . "<br>";
}
