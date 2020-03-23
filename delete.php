<?php

    $file = $_REQUEST['filename'] ?? $filename ?? false; 
 
       unlink(__dir__ . '/files/' . $file) ;
       header('location: index.php');

?>

