<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Buku Penerimaan<?php echo $button ?></h2>
        <div class="box">
        <div class="box-body">
        <form action="<?php echo $action; ?>" method="post">

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="date">Tanggal <?php echo form_error('tgl') ?></label>
            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="" value="<?php echo $tgl; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="brg_yg_dikirim">Barang yang Dikirim <?php echo form_error('brg_yg_dikirim') ?></label>
            <textarea class="form-control" rows="3" name="brg_yg_dikirim" id="brg_yg_dikirim" placeholder=""><?php echo $brg_yg_dikirim; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="int">No Spk Pesanan <?php echo form_error('no_spk_pesanan') ?></label>
            <input type="text" class="form-control" name="no_spk_pesanan" id="no_spk_pesanan" placeholder="" value="<?php echo $no_spk_pesanan; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-5">
            <br><label for="int">No Berita <?php echo form_error('no_berita') ?></label>
            <input type="text" class="form-control" name="no_berita" id="no_berita" placeholder="" value="<?php echo $no_berita; ?>" />
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
	    <input type="hidden" name="id_bk_penerimaan" value="<?php echo $id_bk_penerimaan; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_bk_penerimaan') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>