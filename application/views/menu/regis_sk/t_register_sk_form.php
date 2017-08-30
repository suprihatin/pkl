<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Register SK <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

	    <div class="form-group">
        <div class="col-sm-5">
            <label for="date">Tanggal <?php echo form_error('tgl') ?></label>
            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="" value="<?php echo $tgl; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <label for="int">No <?php echo form_error('no') ?></label>
            <input type="text" class="form-control" name="no" id="no" placeholder="" value="<?php echo $no; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="kpd">Kepada <?php echo form_error('kpd') ?></label>
            <textarea class="form-control" rows="3" name="kpd" id="kpd" placeholder=""><?php echo $kpd; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="isi_surat">Isi Surat <?php echo form_error('isi_surat') ?></label>
            <textarea class="form-control" rows="3" name="isi_surat" id="isi_surat" placeholder=""><?php echo $isi_surat; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="int">No Surat <?php echo form_error('no_surat') ?></label>
            <input type="text" class="form-control" name="no_surat" id="no_surat" placeholder="" value="<?php echo $no_surat; ?>" />
        </div>

        <div class="col-sm-10">
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_register_sk') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>