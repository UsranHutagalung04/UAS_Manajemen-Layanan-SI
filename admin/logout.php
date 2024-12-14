<?php
# @Author: Usran Bangun Fajar Hutagalung
# @Date:   8 January, 5:05
# @Copyright: (c)Usran Developer-->

session_start();
unset($_SESSION['admin']); // unset admin session
header("Location: index");
?>
