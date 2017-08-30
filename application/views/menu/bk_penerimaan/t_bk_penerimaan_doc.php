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
        <h2>Laporan Penerimaan</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal</th>
		<th>Barang yang Dikirim</th>
		<th>No Spk Pesanan</th>
		<th>No Berita</th>
		<th>Rekanan</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($t_bk_penerimaan_data as $t_bk_penerimaan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_bk_penerimaan->tgl ?></td>
		      <td><?php echo $t_bk_penerimaan->brg_yg_dikirim ?></td>
		      <td><?php echo $t_bk_penerimaan->no_spk_pesanan ?></td>
		      <td><?php echo $t_bk_penerimaan->no_berita ?></td>
		      <td><?php echo $t_bk_penerimaan->rekanan ?></td>
		      <td><?php echo $t_bk_penerimaan->ket ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>