<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Peserta List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
            <?php echo anchor(site_url('peserta/create'), 'Create', 'class="btn btn-warning"'); ?>
            <?php echo anchor(site_url('peserta/excel'), 'Excel', 'class="btn btn-success"'); ?>
            <?php echo anchor(site_url('peserta/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <div class="box">
        <div class="box-body">
        <table class="table table-hover" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nomor</th>
		    <th>Nama</th>
		    <th>Created</th>
		    <th>Updated</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($peserta_data as $peserta)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $peserta->nomor ?></td>
		    <td><?php echo $peserta->nama ?></td>
		    <td><?php echo $peserta->created ?></td>
		    <td><?php echo $peserta->updated ?></td>
		    <td style="text-align:center" width="100px">
			<?php 
			echo anchor(site_url('peserta/read/'.$peserta->id_peserta),'<small class="label bg-green"><i class="fa fa-search"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('peserta/update/'.$peserta->id_peserta),'<small class="label bg-yellow"><i class="fa fa-pencil"></i></small>'); 
			echo ' '; 
			echo anchor(site_url('peserta/delete/'.$peserta->id_peserta),'<small class="label bg-red"><i class="fa fa-trash-o"></i></small>','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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