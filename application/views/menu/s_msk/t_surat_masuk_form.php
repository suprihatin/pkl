<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Surat Masuk <?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

        <div class="form-group">
        <div class="col-xs-10">
            <label for="int">Nomor Surat <?php echo form_error('no_srt') ?></label>
            <input type="text" class="form-control" name="no_srt" id="no_srt" placeholder="" value="<?php echo $no_srt; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="date" >Tanggal Surat <?php echo form_error('tgl_surat') ?></label>
            <input type="date" class="form-control" name="tgl_surat" id="tgl_surat" placeholder="" value="<?php echo $tgl_surat; ?>" />
        </div></div>

        <div class="form-group">
        <div class="col-sm-5">
            <br><label for="date">Tanggal Terima <?php echo form_error('tgl_terima') ?></label>
            <input type="date" class="form-control" name="tgl_terima" id="tgl_terima" placeholder="" value="<?php echo $tgl_terima; ?>" />
        </div></div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="surat_dari">Surat Dari <?php echo form_error('surat_dari') ?></label>
            <textarea class="form-control" rows="3" name="surat_dari" id="surat_dari" placeholder=""><?php echo $surat_dari; ?></textarea>
        </div></div></br>
	    
	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="perihal">Perihal <?php echo form_error('perihal') ?></label>
            <textarea class="form-control" rows="3" name="perihal" id="perihal" placeholder=""><?php echo $perihal; ?></textarea>
        </div></div></br>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="ket">Keterangan <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder=""><?php echo $ket; ?></textarea>
        </div></div></br>

        <div class="col-sm-5">
	    <input type="hidden" name="id_srt_msk" value="<?php echo $id_srt_msk; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_surat_masuk') ?>" class="btn btn-default">Cancel</a>
        </div>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>