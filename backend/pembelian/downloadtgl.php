<?php
include ('../../Connect.php');
require '../../vendor/autoload.php';

  if (isset($_POST)) {
    $awal = $_POST['tgl_awal'];
    $akhir = $_POST['tgl_akhir'];

    // var_dump($awal);
    // var_dump($akhir);
    $query = "
      SELECT
            pembelian.id AS id,
            pembelian.code AS kode,
            supplier.name AS supplier,
            pembelian.total AS total,
            pembelian.created_at AS tanggal
          FROM pembelian
          INNER JOIN supplier
          ON pembelian.supplier_id=supplier.id
          WHERE pembelian.created_at BETWEEN '$awal' AND '$akhir'";
      $buys = $conn->query($query);
      // var_dump($buys);
      ob_start();
  }
?>
<?= include('../../pages/laporan/pdf/pembelian.php') ?>

<?php
  $html = ob_get_clean();
  $title = "Laporan Pembelian - ".date("d-m-Y");
  
  use Dompdf\Dompdf;
  
  $document = new Dompdf();
  $document->loadHtml($html);
  $document->setPaper('A4', 'portrait');
  $document->render();
  $document->stream($title,array("Attachment"=>0));

?>