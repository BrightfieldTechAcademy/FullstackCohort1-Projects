<?php

include_once('Core/init.php');

session_destroy();
header("Location: ". BASE_URL . "/index.php");

?>