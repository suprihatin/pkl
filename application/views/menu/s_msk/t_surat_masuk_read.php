<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Masuk</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
        <tr><td>Nomor Surat</td><td><?php echo $no_srt; ?></td></tr>
	    <tr><td>Tanggal Surat</td><td><?php echo $tgl_surat; ?></td></tr>
	    <tr><td>Surat Dari</td><td><?php echo $surat_dari; ?></td></tr>
	    <tr><td>Tanggal Terima</td><td><?php echo $tgl_terima; ?></td></tr>
	    <tr><td>Perihal</td><td><?php echo $perihal; ?></td></tr>
	    <tr><td>Ket</td><td><?php echo $ket; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_surat_masuk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>