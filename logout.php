<?php
include_once("./config/db.php");

session_destroy();
header("Location: index.php");
?>