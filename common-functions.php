<?php 
// This file should be included in each php file that needs to use
// these functions.

function getProtocol() {
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) {
        return "https";
    }
    else {
        return "http";
    }
}

function redirect($path) {
    $protocol = getProtocol();
    $domain = $_SERVER['HTTP_HOST'];
    header("Location: $protocol://$domain$path");
    exit;
}

function getError() {
    if (isset($_SESSION['error'])) {
        return $_SESSION['error'];
        unset($_SESSION['error']);
    }
    else {
        return false;
    }
}
    
?>