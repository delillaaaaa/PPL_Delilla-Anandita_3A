<?php 
//file
require_once "Validator.php";

try {
    $result = validatename("Mochamad Januar Sugiarto");
    echo "PASS: nama sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: nama tidak valid. Error: ". $e->getmessname() . "\n";
}

try {
    $result = validateName("Januarrr 1212");
    echo "PASS: Nama 'Januarrr 1212' sudah benar\n";
} catch (Exception $e) {
    echo "FAIL: Nama 'Januarrr 1212' tidak valid. Error: " . $e->getMessage() . "\n";
}