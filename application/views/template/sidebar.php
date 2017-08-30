<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE/dist/img/avatar04.png') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <?php $user = $this->ion_auth->user()->row() ?>
                <p><?php echo $user->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">Menu</li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-desktop"></i> <span>Agenda Surat</span> <i class="fa fa-angle-left pull-right"></i>
                    
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('t_surat_masuk') ?>"><i class="fa fa-circle-o"></i>Surat Masuk</a></li>
                    <li><a href="<?php echo site_url('t_surat_keluar') ?>"><i class="fa fa-circle-o"></i>Surat Keluar</a></li>
                    <li><a href="<?php echo site_url('t_surat_tgs') ?>"><i class="fa fa-circle-o"></i>Surat Tugas</a></li>
                    <li><a href="<?php echo site_url('t_register_sk') ?>"><i class="fa fa-circle-o"></i>Register SK</a></li>
                    <li><a href="<?php echo site_url('t_reg_kontrak') ?>"><i class="fa fa-circle-o"></i>Register Kontrak</a></li>
                    <li><a href="<?php echo site_url('t_bk_nego') ?>"><i class="fa fa-circle-o"></i>Buku Negosiasi</a></li>
                    <li><a href="<?php echo site_url('t_bk_penerimaan') ?>"><i class="fa fa-circle-o"></i>Buku Penerimaan</a></li>
                    <li><a href="<?php echo site_url('t_bk_pesanan') ?>"><i class="fa fa-circle-o"></i>Buku Pesanan</a></li>
                </ul>
                
            </li>
            

           <!--  <li><a href="<?php echo site_url('peserta') ?>"><i class="fa fa-users"></i> <span>Peserta</span></a></li>
            <li class="header">Setting</li>
            <li><a href="<?php echo site_url('harviacode') ?>" target="_blank"><i class="fa fa-wrench"></i> <span>CRUD</span></a></li> -->
        </ul>
    </section>
</aside>
<div class="content-wrapper">