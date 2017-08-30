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
        <h2>Laporan Negosiasi</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal</th>
		<th>Barang Jasa</th>
		<th>No Spk</th>
		<th>No Hasil</th>
		<th>Rekanan</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($t_bk_nego_data as $t_bk_nego)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_bk_nego->tgl ?></td>
		      <td><?php echo $t_bk_nego->brg_jasa ?></td>
		      <td><?php echo $t_bk_nego->no_spk ?></td>
		      <td><?php echo $t_bk_nego->no_hasil ?></td>
		      <td><?php echo $t_bk_nego->rekanan ?></td>
		      <td><?php echo $t_bk_nego->ket ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>