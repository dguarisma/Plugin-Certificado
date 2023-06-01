<?php
session_start();

if (isset($_SESSION['pdf_content'])) {
    $pdf_content = $_SESSION['pdf_content'];
    $filename = isset($_GET['filename']) ? $_GET['filename'] : 'cotizacion.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . strlen($pdf_content));
    echo $pdf_content;
    exit();
} else {
    echo 'Error: No se encontron el contenido del PDF en la sesión.';
}
?>
