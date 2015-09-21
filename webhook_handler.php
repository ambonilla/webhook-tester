<?php

require_once "config.php";

function run(){

   $postData = $_POST['payload'];
   print_r($_POST);
}

try{
   if (!isset($_POST['payload'])){
      header('X-PHP-Response-Code: 200', true, 200);
      echo "Nothing to see here";
   }
   else{
      run();
   }
} catch(Exception $e){
   $errorMsg = $e->getMessage();
   print_r($errorMsg);
}
