<?php
session_start();
session_unset();
session_destroy();
header("location:../diseño/principal.php");
exit;
?>