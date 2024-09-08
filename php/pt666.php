<?php 
echo "Random number between 700 and 7000: ".mt_rand(700, 7000);
echo "<p>Decimal Number: 226170307072</p>";
echo "<p>Binary Number: ". decbin(226170307072)."</p>";
echo "<p>Octal Number: ". decoct(226170307072)."</p>";
echo "<p>Hexadecimal Number :". dechex(226170307072)."</p>";
$angleRad = deg2rad(45);
echo "For angle 45 degrees:<br>";
echo "Sine: ".sin($angleRad)."<br>";
echo "Cosine: ".cos($angleRad)."<br>";
echo "Tangent: ".tan($angleRad)."<br>";
?>