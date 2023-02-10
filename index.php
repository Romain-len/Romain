<?php

session_start();
require "controller/navigation.php";
require "controller/snows.php";

if (isset($_GET['action'])) {
  $action = $_GET['action'];
  switch ($action) {
      case 'home' :
          home();
          break;
      case 'snows' :
          snows();
          break;
      default :
          lost();
      }
    }
else {
    home();
}