<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Admin Kumon</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url(); ?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
                        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url(); ?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->  
      <script>
function tampilkan(){
  var id_user=document.getElementById("form1").tingkatan.value;
  if (id_user=="1")
    {
        document.getElementById("tunai").value = '320000';
       
    }
	else
    {
       document.getElementById("tunai").value = '375000';
     
    }
}
</script>
    </head>
    
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
          <?php $this->load->view('frame/side_nav')?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
        <?php $this->load->view('frame/header')?>
                
                <!-- PAGE CONTENT WRAPPER -->
                
             
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                             
                             
                            <form action="<?php echo site_url('c_beranda/tesspp')?>" id="form1" name="form1" class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form SPP</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                  
                                </div>
                                <div class="panel-body">                                                                        
                                      
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">id_Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="id_siswa" value="<?php echo $id_siswa; ?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    <?php 
                                    $id = $id_siswa;
                                    $sql =  "select data_siswa.nama, data_siswa.subject_mp, spp.bulan from data_siswa left outer join spp on data_siswa.id_siswa = spp.id_siswa where spp.id_siswa=$id";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $a) { 
                            
                            
                             $bulan = $a->bulan;
                             $b = "Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember";
                             $ar = explode(" ",$b);
                             $aa = $ar[$bulan-1];
                                    ?>

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Subjek</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="subject_mp" value="<?=$a->subject_mp?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="nama" value="<?=$a->nama?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                      
                               
                                     
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Bulan Pembayaran</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            
                                            <input type="text" class="form-control"  name="bulan" value="<?=$aa?>"/>
                                        </div>
                                    </div>
                                         

                                    


                                    <?php
                                 }
                                     ?>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right" type="submit" value="Kirim">Kirim</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
       
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                   
    </body>
</html>






