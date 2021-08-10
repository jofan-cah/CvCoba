<?php

if (isset($_GET)) {
    header('Content-Disposition: attachment; filename="coba.jpg"');
    header('Content-Type: .pdf');
    readfile(__DIR__, '/pdf/coba.pdf');
}
