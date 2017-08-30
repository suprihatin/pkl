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
        <h2>Laporan Registrasi Kontrak</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Tanggal</th>
		<th>Kepada</th>
		<th>Isi Surat</th>
		<th>Petunjuk</th>
		
            </tr><?php
            foreach ($t_reg_kontrak_data as $t_reg_kontrak)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $t_reg_kontrak->tgl ?></td>
		      <td><?php echo $t_reg_kontrak->kpd ?></td>
		      <td><?php echo $t_reg_kontrak->isi_surat ?></td>
		      <td><?php echo $t_reg_kontrak->petunjuk ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>