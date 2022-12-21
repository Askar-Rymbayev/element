<?php
foreach ($_FILES['file']['error'] as $index => $error) {
    if ($error != UPLOAD_ERR_OK) {
        die('не получилось загрузить файл: ' . $_FILES['file']['name'][$index]);
    }
    $from = $_FILES['file']['tmp_name'][$index];
    $to = 'uploaded_files/' . $_FILES['file']['name'][$index];
    move_uploaded_file($from, $to);
}