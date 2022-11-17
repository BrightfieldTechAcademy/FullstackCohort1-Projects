<?php

include_once('Core/init.php');

session_destroy();
header('Location: /index.php');

?>