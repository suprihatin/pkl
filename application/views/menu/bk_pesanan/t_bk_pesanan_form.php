<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Buku Pesanan <?php echo $button ?></h2>
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
            <br><label for="varchar">Barang Dipesan <?php echo form_error('brg_dipesan') ?></label>
            <input type="text" class="form-control" name="brg_dipesan" id="brg_dipesan" placeholder="" value="<?php echo $brg_dipesan; ?>" />
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="rekanan">Rekanan <?php echo form_error('rekanan') ?></label>
            <textarea class="form-control" rows="3" name="rekanan" id="rekanan" placeholder=""><?php echo $rekanan; ?></textarea>
        </div>

	    <div class="form-group">
        <div class="col-sm-10">
            <br><label for="int">Petunjuk No <?php echo form_error('petunjuk_no') ?></label>
            <input type="text" class="form-control" name="petunjuk_no" id="petunjuk_no" placeholder="" value="<?php echo $petunjuk_no; ?>" />
        </div>

        <div class="col-sm-10">
	    <input type="hidden" name="id_pesanan" value="<?php echo $id_pesanan; ?>" /> 
	    <br><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_bk_pesanan') ?>" class="btn btn-default">Cancel</a>
	</form>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>