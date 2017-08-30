<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Register SK</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Tanggal</td><td><?php echo $tgl; ?></td></tr>
	    <tr><td>No</td><td><?php echo $no; ?></td></tr>
	    <tr><td>Kepada</td><td><?php echo $kpd; ?></td></tr>
	    <tr><td>Isi Surat</td><td><?php echo $isi_surat; ?></td></tr>
	    <tr><td>No Surat</td><td><?php echo $no_surat; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('t_register_sk') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>