<?php 

error_reporting(E_ALL);
ini_set('display_errors', 'On');

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once('Config/Config.php');
require_once('Helpers/UserType.php');

spl_autoload_register(function ($class_name)
{
  $path = "Libraries/".$class_name.".php";
  if(file_exists($path))
  {
    require_once($path);
  }
  else
  {
    $path = "Models/".$class_name.".php";
    require_once($path);
  }
});
