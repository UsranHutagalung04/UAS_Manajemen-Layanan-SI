<?php
# @Author: Usran Bangun Fajar Hutagalung
# @Date:   8 January 2018, 5:05
# @Copyright: (c) Usran Developer
?>
<?php

session_start();
$admin_login = $_SESSION["admin"];
// Jika Belum Login Redirect Ke Index
if(!isset($_SESSION["admin"])) header("Location: login");

?>
