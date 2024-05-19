<?php
require 'FileProcessor.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $processor = new FileProcessor();
    $status = 'error';

    $uploadedFile = $processor->uploadFile($_FILES['file']);
    if ($uploadedFile) {
        $status = 'success';
        $output = $processor->processFile($uploadedFile);
        header("Location: index.php?status=$status&output=" . urlencode($output));
    } else {
        header("Location: index.php?status=$status");
    }
    exit();
}
