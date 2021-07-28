<?php
    include"config.php";
    $nama_dokumen = "data-siswa";
    define('_MPDF_', 'plugins/mpdf60/');
    include(_MPDF_."mpdf.php");
    $mpdf = new mPDF('utf-8', 'A4', 12, 'arial');

    ob_start();

        include"export/to_pdf.php";
    
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHTML(utf8_encode($html));
    $mpdf->Output($nama_dokumen.".pdf","I");
    exit;
?>