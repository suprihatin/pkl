<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Registrasi kontrak <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

	    <div class="form-group">
        <div class="col-sm-5">
            <label for="date">Tanggal <?php echo form_error('tgl') ?></label>
            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="" value="<?php echo $tgl; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="varchar">Kepada <?php echo form_error('kpd') ?></label>
            <input type="text" class="form-control" name="kpd" id="kpd" placeholder="" value="<?php echo $kpd; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="varchar">Isi Surat <?php echo form_error('isi_surat') ?></label>
            <input type="text" class="form-control" name="isi_surat" id="isi_surat" placeholder="" value="<?php echo $isi_surat; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="varchar">Petunjuk <?php echo form_error('petunjuk') ?></label>
            <input type="text" class="form-control" name="petunjuk" id="petunjuk" placeholder="" value="<?php echo $petunjuk; ?>" />
        </div>

        <div class="col-sm-10">
	    <input type="hidden" name="id_kontrak" value="<?php echo $id_kontrak; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_reg_kontrak') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>