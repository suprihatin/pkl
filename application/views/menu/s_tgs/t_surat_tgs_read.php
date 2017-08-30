<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Tugas</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Tanggal</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>Dasar Tgs</td><td><?php echo $dasar_tgs; ?></td></tr>
	    <tr><td>Kepada</td><td><?php echo $kepada; ?></td></tr>
	    <tr><td>Petunjuk No</td><td><?php echo $petunjuk_no; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_surat_tgs') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>