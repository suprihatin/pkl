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
        <h2>Laporan Pesanan</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal</th>
		<th>Barang Dipesan</th>
		<th>Rekanan</th>
		<th>Petunjuk No</th>
		
            </tr><?php
            foreach ($t_bk_pesanan_data as $t_bk_pesanan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_bk_pesanan->tgl ?></td>
		      <td><?php echo $t_bk_pesanan->brg_dipesan ?></td>
		      <td><?php echo $t_bk_pesanan->rekanan ?></td>
		      <td><?php echo $t_bk_pesanan->petunjuk_no ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>