<?php
require 'vendor/autoload.php';

class GeradorPDF {
    public function gerar($nome) {
        $mpdf = new \Mpdf\Mpdf();

        $html = "<h1>Olá, $nome!</h1>";
        $html .= "<p>PDF gerado com sucesso usando Composer e O.O.</p>";
        $html .= "<p>Data: " . date('d/m/Y') . "</p>";

        $mpdf->WriteHTML($html);

        $arquivo = __DIR__ . '/meu-pdf.pdf';
        $mpdf->Output($arquivo, \Mpdf\Output\Destination::FILE);

        echo "PDF gerado com sucesso! Confira o arquivo: meu-pdf.pdf";
    }
}
$gerador = new GeradorPDF();
$gerador->gerar("Deivid");