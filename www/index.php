<?php
include_once 'router.php';
Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
session_start();
?>