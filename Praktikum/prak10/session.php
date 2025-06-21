<?php
session_start();
$_SESSION['username'] = 'andi';
$_SESSION['is_logged_in'] = true;
session_start();
echo $_SESSION['username']; // Output: andi
session_unset();
session_destroy();
?>