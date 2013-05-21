<?php
require_once(realpath(dirname(__FILE__) . "/../config.php"));
session_start();
session_destroy();
header("location:$root");
?>