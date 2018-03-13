<?php // Example 26-1: functions.php
  $dbhost  = 'localhost';    // Unlikely to require changing
  $dbname  = 'filmid';   // Modify these...
  $dbuser  = 'root';   // ...variables according
  $dbpass  = 'usbw';   // ...to your installation
  $appname = "LilPRo"; // ...and preference

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($connection->connect_error) die($connection->connect_error);

  function checkSession(){
    if (isset($_SESSION['auth'])&& $_SESSION['auth']==='admin') {
              return true;
              }
    elseif (isset($_SESSION['auth'])&& $_SESSION['auth']==='user') {
              return false;
              }
  }

  function queryMysql($query)
  {
    global $connection;
    $result = $connection->query($query);
    if (!$result) die($connection->error);
    return $result;
  }


  function sanitizeString($var)
  {
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
  }


?>
