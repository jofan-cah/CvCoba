<?php

if (isset($_GET)) {
    header('Content-Disposition: attachment;');
    readfile(__DIR__, '/pdf/coba.pdf');
    exit();
}
