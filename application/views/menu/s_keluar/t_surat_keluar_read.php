<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Keluar</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Tanggal Surat</td><td><?php echo $tgl_surat; ?></td></tr>
	    <tr><td>Kepada</td><td><?php echo $kepada; ?></td></tr>
	    <tr><td>Perihal</td><td><?php echo $perihal; ?></td></tr>
	    <tr><td>Petunjuk No</td><td><?php echo $petunjuk_no; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_surat_keluar') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>