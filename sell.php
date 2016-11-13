<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->


<!--</head>-->
<!--<body>-->

<!--    <div id="content"><?php echo $content; ?></div>-->
    
    
  
        
<!--</body>-->
<!--</html>-->


<?php

$content = 'sell';
if (isset($_GET['ajax'])) {
    echo $content;
} else {
    include_once 'layout.php';
}