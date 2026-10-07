<?php
session_start();
if (isset($_POST["hapus"])) {
 unset($_SESSION["daftarWar"][$_POST["hapus"]]);
}
header("Location: dashboard.php");
exit;