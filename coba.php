<?php
$file = 'coba.pdf';
if (file_exists($file)) {
    header('Content-Description: File Transfer');

    header('Content-Disposition: attachment;');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    readfile($file);
    exit;
}
