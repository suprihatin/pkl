<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Buku Negosiasi <?php echo $button ?></h2>
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
            <br><label for="brg_jasa">Barang Jasa <?php echo form_error('brg_jasa') ?></label>
            <textarea class="form-control" rows="3" name="brg_jasa" id="brg_jasa" placeholder=""><?php echo $brg_jasa; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="int">No SPK <?php echo form_error('no_spk') ?></label>
            <input type="text" class="form-control" name="no_spk" id="no_spk" placeholder="" value="<?php echo $no_spk; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="int">No Hasil <?php echo form_error('no_hasil') ?></label>
            <input type="text" class="form-control" name="no_hasil" id="no_hasil" placeholder="" value="<?php echo $no_hasil; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="rekanan">Rekanan <?php echo form_error('rekanan') ?></label>
            <textarea class="form-control" rows="3" name="rekanan" id="rekanan" placeholder=""><?php echo $rekanan; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="ket">Keterangan <?php echo form_error('ket') ?></label>
            <textarea class="form-control" rows="3" name="ket" id="ket" placeholder=""><?php echo $ket; ?></textarea>
        </div>

        <div class="col-sm-10">
	    <input type="hidden" name="id_nego" value="<?php echo $id_nego; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_bk_nego') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>