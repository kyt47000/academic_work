<?php
$cookie_name = "user";
$cookie_value = "Yash";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Cookie '" . $cookie_name . "' is set!";
?>
<?php
$cookie_name = "user";
if(isset($_COOKIE[$cookie_name])) {
    echo "Cookie '" . $cookie_name . "' has the value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie named '" . $cookie_name . "' is not set!";
}
?>
