<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Peserta <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nomor <?php echo form_error('nomor') ?></label>
            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor" value="<?php echo $nomor; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created <?php echo form_error('created') ?></label>
            <input type="text" class="form-control" name="created" id="created" placeholder="Created" value="<?php echo $created; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated <?php echo form_error('updated') ?></label>
            <input type="text" class="form-control" name="updated" id="updated" placeholder="Updated" value="<?php echo $updated; ?>" />
        </div>
	    <input type="hidden" name="id_peserta" value="<?php echo $id_peserta; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('peserta') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>