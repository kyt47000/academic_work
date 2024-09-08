<?php
session_start();
$_SESSION['username'] = 'Yash Kayastha';
if(isset($_SESSION['username'])) {
    echo 'Username: ' . $_SESSION['username'].'<br>';
    echo session_id();
} else {
    echo 'Session variable not set.';
}
session_destroy();
?>
