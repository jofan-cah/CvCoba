<?php

if (isset($_GET)) {
    header('Content-Disposition: attachment; filename="coba.jpg"');
    header('Content-Type: .pdf');
}
