<?php
$text="Scarlett Wizard";
if($text==strtolower($text)) {
    echo 'The string is lowercase.';
} else {
    echo 'The string is not lowercase.';
}
echo "<br>Reversed String : ".strrev($text)."<br>";
echo "White space removed : ".str_replace(' ', '', $text)."<br>";
echo "String replaced :" .str_replace("Scarlett", "Yash", $text)."<br>";
?>
