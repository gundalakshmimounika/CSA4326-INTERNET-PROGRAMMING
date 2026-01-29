<?php
$a = simplexml_load_file("student.xml");

foreach ($a->student as $b) {
    echo "RegNo: " . $b->rgno . "<br>";
    echo "Name: " . $b->name . "<br>";
    echo "Dept: " . $b->dept . "<br><br>";
}
?>
