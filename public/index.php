<?php
require_once '../app/middleware.php';
$m = new middleware();
$m->checklogin(); 

require_once '../app/core/App.php';
$myApp = new App(); 
?>