<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Peserta Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nomor</td><td><?php echo $nomor; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
	    <tr><td>Created</td><td><?php echo $created; ?></td></tr>
	    <tr><td>Updated</td><td><?php echo $updated; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('peserta') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>