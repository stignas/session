<?php
declare(strict_types=1);

session_start();

if (!isset($_SESSION['visit_counter'])) {
    $_SESSION['visit_counter'] = 0;
}
$_SESSION['visit_counter'] += 1;

if (!isset($_SESSION['visit_history'])) {
    $_SESSION['visit_history'] = '';
}
$_SESSION['visit_history'] .= str_replace('/paskaitos/oop/31p', '', strtolower($_SERVER['REQUEST_URI'])) . PHP_EOL;

echo "<pre>";
echo 'Visit count: ' . $_SESSION['visit_counter'];
echo "<br>";
echo "<hr>";
echo '<b>Visit history:</b> <br>';
echo $_SESSION['visit_history'];
?>

<html lang="en">
<body>
<form action="/paskaitos/oop/31p/clear.php" method="post">
    <button name="clear_session" value="true">Clear Session</button>
</form>
</body>
</html>

