<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Buku Negosiasi</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('t_bk_nego/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('t_bk_nego/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('t_bk_nego/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tanggal</th>
		    <th>Barang Jasa</th>
		    <th>No SPK</th>
		    <th>No Hasil</th>
		    <th>Rekanan</th>
		    <th>Keterangan</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($t_bk_nego_data as $t_bk_nego)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $t_bk_nego->tgl ?></td>
		    <td><?php echo $t_bk_nego->brg_jasa ?></td>
		    <td><?php echo $t_bk_nego->no_spk ?></td>
		    <td><?php echo $t_bk_nego->no_hasil ?></td>
		    <td><?php echo $t_bk_nego->rekanan ?></td>
		    <td><?php echo $t_bk_nego->ket ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('t_bk_nego/read/'.$t_bk_nego->id_nego),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('t_bk_nego/update/'.$t_bk_nego->id_nego),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('t_bk_nego/delete/'.$t_bk_nego->id_nego),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        </div>
        </div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>