
<?php
  $GET_['nazwa'] = $ankieta;
    require_once "dompdf/autoload.inc.php";

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();

    //$dompdf->loadHTML("<h1>Welcome</h1>");

    $html = file_get_contents("http://localhost/System_ankietyzacji_online/statystyki_podglad.php?nazwa=$ankieta");
    $dompdf->loadHTML($html);

    $dompdf->setPaper('A4', 'landscape');

    $dompdf->render();

    $dompdf->stream("codexworld", array("Attachment" => 0));


?>
