<?php

if (isset($_GET)) {
    header('Content-Disposition: attachment; filename="coba.pdf"');
    header('Content-Type: .pdf');
    readfile(__DIR__, '/pdf/coba.pdf');
    exit();
}
