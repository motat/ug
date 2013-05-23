<?php
ob_start();
session_start();
session_destroy();
require_once(realpath(dirname(__FILE__) . "/../config.php"));
header("location:$root");
?>