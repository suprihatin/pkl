<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>

<!-- Main content -->
<section class="content">

<div class="page-content">
  <div class="page-header position-relative">
    <h1> Profile <small> <i class="icon-double-angle-right"></i> View </small> </h1>
  </div>
  <!--/.page-header-->
  <div class="row-fluid">
    <div class="span12"> 
      <!--PAGE CONTENT BEGINS-->
      <div id="user-profile-2" class="user-profile row-fluid">
        <div class="tab-content no-border padding-24">
          <div id="home" class="tab-pane in active">
            <div class="row-fluid">
             <!--  <div class="span3 center"> <span class="profile-picture"> <img  alt="" id="avatar2" src="user/<?php echo $data['gambar']; ?>" /> </span> </div> -->
              <!--/span-->
              
              <div class="span9">
                <!-- <h4 class="blue"> <span class="middle"><?php echo $data->nama_user ?></span> <span class="label label-purple arrowed-in-right"> <i class="icon-circle smaller-80"></i> online </span> </h4> -->
                <div class="profile-user-info">
                  <div class="profile-info-row">
                    <div class="profile-info-name"> Username </div>
                    <div class="profile-info-value"><!--  <span><?php echo $data->username ?></span> --> </div>
                  </div>
                  <div class="profile-info-row">
                    <div class="profile-info-name"> Alamat </div>
                  <!--   <div class="profile-info-value"> <i class="icon-map-marker light-orange bigger-110"></i> <span><?php echo $data['alamat']; ?></span> </div> -->
                  </div>
                  <div class="profile-info-row">
                    <div class="profile-info-name"> Level </div>
                   <div class="profile-info-value"> <span><?php echo $data->level ?></span> </div>
                  </div>
                  <div class="profile-info-row">
                    <div class="profile-info-name">Password </div>
                    <div class="profile-info-value"> <span><a href="home.php?page=ganti_password">
                      <button class="btn btn-small btn-primary">Ganti Password</button>
                      </a></span> </div>
                  </div>
                </div>
              </div>
              <!--/span--> 
            </div>
            <!--/row-fluid-->
            <div class="space-20"></div>
          </div>
          <!--#home--> 
        </div>
      </div>
      
      <!--PAGE CONTENT ENDS--> 
    </div>
    <!--/.span--> 
  </div>
  <!--/.row-fluid--> 
</div>
<!--/.page-content-->
</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>