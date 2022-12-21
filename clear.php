<?php
declare(strict_types=1);
echo $_COOKIE['PHPSESSID'];
if (isset($_POST['clear_session'])) {
    session_unset();
    setcookie(session_name(), '', 0, '/');
    unset($_POST['clear_session']);
}
else {
    die('No session');
}

header('Location: /paskaitos/oop/31p/');
