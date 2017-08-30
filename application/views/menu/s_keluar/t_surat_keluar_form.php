<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Keluar <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

	    <div class="form-group">
        <div class="col-sm-5">
            <label for="date">Tanggal Surat <?php echo form_error('tgl_surat') ?></label>
            <input type="date" class="form-control" name="tgl_surat" id="tgl_surat" placeholder="" value="<?php echo $tgl_surat; ?>" />
        </div></div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="kepada">Kepada <?php echo form_error('kepada') ?></label>
            <textarea class="form-control" rows="3" name="kepada" id="kepada" placeholder=""><?php echo $kepada; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="perihal">Perihal <?php echo form_error('perihal') ?></label>
            <textarea class="form-control" rows="3" name="perihal" id="perihal" placeholder=""><?php echo $perihal; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="int">Petunjuk Nomor <?php echo form_error('petunjuk_no') ?></label>
            <input type="text" class="form-control" name="petunjuk_no" id="petunjuk_no" placeholder="" value="<?php echo $petunjuk_no; ?>" />
        </div>

        <div class="col-sm-10">
	    <input type="hidden" name="id_srt_keluar" value="<?php echo $id_srt_keluar; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_surat_keluar') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>