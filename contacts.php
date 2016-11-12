<?php

$content = 'hladysh.im@gmail.com';
if (isset($_GET['ajax'])) {
    echo $content;
} else {
    include_once 'layout.php';
}