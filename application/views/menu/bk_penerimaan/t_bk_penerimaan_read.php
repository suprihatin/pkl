<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Buku Penerimaan</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Tanggal</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Barang yang Dikirim</td><td><?php echo $brg_yg_dikirim; ?></td></tr>
	    <tr><td>No Spk Pesanan</td><td><?php echo $no_spk_pesanan; ?></td></tr>
	    <tr><td>No Berita</td><td><?php echo $no_berita; ?></td></tr>
	    <tr><td>Rekanan</td><td><?php echo $rekanan; ?></td></tr>
	    <tr><td>Keterangan</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_bk_penerimaan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>