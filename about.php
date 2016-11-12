<?php

$content = 'I\'m a web developer';
if (isset($_GET['ajax'])) {
    echo $content;
} else {
    include_once 'layout.php';
}