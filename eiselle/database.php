<?php
if (!defined('HOSTNAME')) {
    define("HOSTNAME", "localhost");
}
if (!defined('USERNAME')) {
    define("USERNAME", "root");
}
if (!defined('PASSWORD')) {
    define("PASSWORD", "");
}
if (!defined('DATABASE')) {
    define("DATABASE", "briones_db");
}

$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
