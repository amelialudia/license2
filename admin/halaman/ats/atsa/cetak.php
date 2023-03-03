<?php
// session_start();
// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'koneksi.php';

//ambil data dari table tr_barang_masuk mengembalikkan data berupa object
$result = query("SELECT * FROM atsa ORDER BY end_date ASC");


//import koneksi ke database
?>

<html>
<head>
  <title> Data ATS </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
			<h2>DATA ATS </h2>
			<h4> Periode A</h4>
				<div class="data-tables datatable-dark">
					
                <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead style="font-size: 12px; color: Black; text-align: center; ">
                    <tr>
                        <th>No</th>
                        <th style="width: 40%;">
                            <center>Deskription</center>
                        </th>
                        <th>
                            <center>Satuan</center>
                        </th>
                        <th>
                            <center>Start Date</center>
                        </th>
                        <th>
                            <center>End Date</center>
                        </th>
                        <th>
                            <center>Perangkat</center>
                        </th>
                        <th>
                            <center>Tahun</center>
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    <?php foreach ($result as $data) : ?>
                        <tr>
                            <td> <?= $x; ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['deskripsi'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['satuan'])); ?> </td>
                            <td> <?= date('d-m-Y', strtotime($data['start_date'])); ?> </td>
                            <td> <?= date('d-m-Y', strtotime($data['end_date'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['perangkat'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['tahun'])); ?> </td>

                           
                            <?php $x++; ?>
                        <?php endforeach; ?>
                </tbody>
            </table>
				</div>
</div>
<script>
$(document).ready(function() {
    $('#hidden-table-info').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


</body>

</html>