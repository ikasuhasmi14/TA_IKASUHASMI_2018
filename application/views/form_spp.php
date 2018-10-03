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
                <!-- PAGE TITLE -->
             
                <!-- END PAGE TITLE -->    
                
                <!-- PAGE CONTENT WRAPPER -->
                
             
                <div class="page-content-wrap">

                
                    <div class="row">
                        <div class="col-md-12">
                             
                             
                            <form action="<?php echo site_url('c_beranda/insertspp')?>" id="form1" name="form1" class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form SPP Matematika</strong></h3>
                                   
                                </div>
                                <div class="panel-body">
                                  
                                </div>
                                <div class="panel-body">                                                                        
                                      
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">ID Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="id_siswa" readonly value="<?php echo $id_siswa; ?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    <?php 
                                    $sql =  "select * from data_siswa where id_siswa=$id_siswa";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $a) { 
                                    ?>

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Subjek</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="subject_mp" readonly value="<?=$a->subject_mp?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control"  name="nama" readonly value="<?=$a->nama?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    
                                      
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">level</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="level" readonly value="<?=$a->level?>"/>
                                            </div>                                            
                                            
                                        </div>
                                    </div>

                           

                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Kelas</label>
                                        <div class="col-md-6 col-xs-12">                                     
                                         <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="kelas" readonly value="<?=$a->kelas?>"/>
                                            </div>  
                                        </div>
                                    </div>

                                     
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Bulan Pembayaran</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="bulan" id="bulan" >
                                                <option>Pilih</option>
                                                <option value="1">January</option>
                                                <option value="2">Februari</option>
                                                <option value="3">Maret</option>
                                                <option value="4">April</option>
                                                <option value="5">Mei</option>
                                                <option value="6">Juni</option>
                                                <option value="7">Juli</option>
                                                <option value="8">Agustus</option>
                                                <option value="9">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">November</option>
                                                <option value="12">Desember</option>
                                              
                                            </select>
                                           
                                        </div>
                                    </div>
                                         

                                    

                                     <div class="form-group">  
                                   
                              <label class="col-md-3 col-xs-12 control-label">Tanggal Masuk Kelas</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"   class="form-control" name="tanggal_masuk"
                                                readonly value="<?=$a->tanggal_masuk?>">                                            
                                            </div>
                                            
                                        </div>
                                    </div>

                                  

 <div class="form-group">  
                                   
                              <label class="col-md-3 col-xs-12 control-label">Tanggal Pembayaran</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                <input type="text"  name="bulan_pembayaran" class="form-control" readonly value="<?php echo date("d-m-y");?>">                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <?php 
                                    $aa = $a->kelas;

                                    if ($aa == "TK A"){
                                        $tunai = "320000";
                                    }
                                    else if ($aa == "TK B"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "1 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "2 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "3 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "4 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "5 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "6 SD"){
                                         $tunai = "320000";
                                    }
                                    else if ($aa == "1 SMP"){
                                         $tunai = "375000";
                                    }
                                    else if ($aa == "2 SMP"){
                                         $tunai = "375000";
                                    }
                                    else if ($aa == "3 SMP"){
                                         $tunai = "375000";
                                    }
                                    else{
                                         $tunai = "375000";
                                    }
                                    ?>
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tunai</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" id="tunai" name="tunai" readonly value="<?php echo $tunai ?>" class="form-control" />
                                            </div>                                            
                                            
                                        </div>
                                    </div>
                                    <?php
                                 }
                                     ?>
                                </div>
                                <div class="panel-footer">                                  
                                    <button class="btn btn-primary pull-right" name="tambah" value="tambah">Tambah</button>
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






