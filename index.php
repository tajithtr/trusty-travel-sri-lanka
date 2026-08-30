<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/includes/header.php';

$page_file = __DIR__ . '/pages/' . $page . '.php';
if (file_exists($page_file)) {
    require_once $page_file;
} else {
    require_once __DIR__ . '/pages/home.php';
}

require_once __DIR__ . '/includes/footer.php';
?>
