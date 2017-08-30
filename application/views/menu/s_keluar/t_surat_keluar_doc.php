<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Laporan Surat Keluar</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal Surat</th>
		<th>Kepada</th>
		<th>Perihal</th>
		<th>Petunjuk No</th>
		
            </tr><?php
            foreach ($t_surat_keluar_data as $t_surat_keluar)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_surat_keluar->tgl_surat ?></td>
		      <td><?php echo $t_surat_keluar->kepada ?></td>
		      <td><?php echo $t_surat_keluar->perihal ?></td>
		      <td><?php echo $t_surat_keluar->petunjuk_no ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>