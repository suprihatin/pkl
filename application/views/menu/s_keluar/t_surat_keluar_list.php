<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Surat Keluar</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('t_surat_keluar/create'), 'Create', 'class="btn btn-warning"'); ?>
		<?php echo anchor(site_url('t_surat_keluar/excel'), 'Excel', 'class="btn btn-success"'); ?>
		<?php echo anchor(site_url('t_surat_keluar/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tanggal Surat</th>
		    <th>Kepada</th>
		    <th>Perihal</th>
		    <th>Petunjuk No</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($t_surat_keluar_data as $t_surat_keluar)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $t_surat_keluar->tgl_surat ?></td>
		    <td><?php echo $t_surat_keluar->kepada ?></td>
		    <td><?php echo $t_surat_keluar->perihal ?></td>
		    <td><?php echo $t_surat_keluar->petunjuk_no ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('t_surat_keluar/read/'.$t_surat_keluar->id_srt_keluar),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('t_surat_keluar/update/'.$t_surat_keluar->id_srt_keluar),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('t_surat_keluar/delete/'.$t_surat_keluar->id_srt_keluar),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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