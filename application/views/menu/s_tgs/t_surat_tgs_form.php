<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Tugas <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

	    <div class="form-group">
        <div class="col-sm-5">
            <label for="date">Tanggal <?php echo form_error('tgl') ?></label>
            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo $tgl; ?>" />
        </div></div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="dasar_tgs">Dasar Tugas <?php echo form_error('dasar_tgs') ?></label>
            <textarea class="form-control" rows="3" name="dasar_tgs" id="dasar_tgs" placeholder="Dasar Tgs"><?php echo $dasar_tgs; ?></textarea>
        </div></div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="kepada">Kepada <?php echo form_error('kepada') ?></label>
            <textarea class="form-control" rows="3" name="kepada" id="kepada" placeholder="Kepada"><?php echo $kepada; ?></textarea>
        </div></div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="varchar">Petunjuk No <?php echo form_error('petunjuk_no') ?></label>
            <input type="text" class="form-control" name="petunjuk_no" id="petunjuk_no" placeholder="Petunjuk No" value="<?php echo $petunjuk_no; ?>" />
        </div></div>

        <div class="col-sm-5">
	    <input type="hidden" name="id_srt_tgs" value="<?php echo $id_srt_tgs; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_surat_tgs') ?>" class="btn btn-default">Cancel</a>
        </div>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>