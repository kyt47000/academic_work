<?php
// Sample associative array
$array = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Convert associative array to JSON string
$jsonString = json_encode($array);

// Output JSON string
echo "JSON String:\n";
echo $jsonString . "\n";

// Convert JSON string back to associative array
$decodedArray = json_decode($jsonString, true);

// Output decoded associative array
echo "Decoded Associative Array:\n";
print_r($decodedArray);
?>
