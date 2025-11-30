<?php

include 'views/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$parts = explode('/', $page);
$module = $parts[0] ?? '';
$file   = $parts[1] ?? '';
$path = "modules/$module/$file.php";

if ($module && $file && file_exists($path)) {
    include $path;
} else {
    include 'views/dashboard.php'; 
}

include 'views/footer.php';
?>