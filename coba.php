<?php

if (isset($_GET)) {
    header('Content-Disposition: attachment; filename="coba.pdf"');
    readfile(__DIR__, '/pdf/coba.pdf');
}
