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
                            
                           
                            <?php if($dataEditCoba){
								$id = $dataEditCoba->id_coba;
								$nama = $dataEditCoba->nama;
								$kelas = $dataEditCoba->kelas;
								$level = $dataEditCoba->level;
								$orang_tua = $dataEditCoba->orang_tua;
								$no_hp = $dataEditCoba->no_hp;
                                $tanggal_lahir = $dataEditCoba->tanggal_lahir;
                               }
							else{
								$nama = "";
								$kelas = "";
								$level = "";
								$Orang_tua = "";
								$no_hp = "";
                                $tanggal_lahir ="";
                               }
							?>
	
 <form action="<?php echo site_url('c_beranda/updatecoba/'.$id)?>" method="post" class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form Edit Siswa Matematika</strong></h3>
                                   
                                </div>
                                <div class="panel-body">
                                   
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                           
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Nama Siswa</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="nama" value="<?php echo $nama ?>" class="form-control"/>
                                                    </div>            
                                                    <span class="help-block">Isilah Nama Siswa</span>
                                                </div>
                                            </div>
                                            
                                          
                                            
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Kelas</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="kelas" value="<?php echo $kelas ?>">
                                                        <option <?php if($kelas == 'TK A'){echo "selected";}?> value='TK A'>TK A</option>
                                                        <option <?php if($kelas == 'TK B'){echo "selected";}?> value='TK B'>TK B</option>
                                                        <option <?php if($kelas == '1 SD'){echo "selected";}?> value='1 SD'>1 SD</option>
                                                        <option <?php if($kelas == '2 SD'){echo "selected";}?> value='2 SD'>2 SD</option>
                                                        <option <?php if($kelas == '3 SD'){echo "selected";}?> value='3 SD'>3 SD</option>
                                                        <option <?php if($kelas == '4 SD'){echo "selected";}?> value='4 SD'>4 SD</option>
                                                        <option <?php if($kelas == '5 SD'){echo "selected";}?> value='5 SD'>5 SD</option>
                                                        <option <?php if($kelas == '6 SD'){echo "selected";}?> value='6 SD'>6 SD</option>
                                                        <option <?php if($kelas == '1 SMP'){echo "selected";}?> value='1 SMP'>1 SMP</option>
                                                        <option <?php if($kelas == '2 SMP'){echo "selected";}?> value='2 SMP'>2 SMP</option>
                                                        <option <?php if($kelas == '3 SMP'){echo "selected";}?> value='3 SMP'>3 SMP</option>
                                                        <option <?php if($kelas == '1 SMA'){echo "selected";}?> value='1 SMA'>1 SMA</option>
                                                        <option <?php if($kelas == '2 SMA'){echo "selected";}?> value='2 SMA'>2 SMA</option>
                                                        <option <?php if($kelas == '3 SMA'){echo "selected";}?> value='3 SMA'>3 SMA</option>
                                                       
                                                    </select>
                                                    <span class="help-block">Select box example</span>
                                                </div>
                                            </div>

                                                <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Tanggal Lahir</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="<?php echo $tanggal_lahir?>" name="tanggal_lahir">                                            
                                                    </div>
                                                    <span class="help-block">Klik Untuk Memunculkan Tanggal</span>
                                                </div>
                                            </div>
                                         
                                          
                                        </div>
                                        <div class="col-md-6">

                                            
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Level</label>
                                                <div class="col-md-9">
                                                    <!-- <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="level" value="<?php echo $level ?>"class="form-control" >                                            
                                                    </div>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div> -->
                                            <select class="form-control select" name="level" value="<?php echo $level ?>">
                                                        <option  <?php if($level == '7A'){echo "selected";}?> value='7A'>7A</option>
                                                        <option  <?php if($level == '6A'){echo "selected";}?> value='6A'>6A</option>
                                                        <option  <?php if($level == '5A'){echo "selected";}?> value='5A'>5A</option>
                                                        <option <?php if($level == '4A'){echo "selected";}?> value='4A'>4A</option>
                                                        <option <?php if($level == '3A'){echo "selected";}?> value='3A'>3A</option>
                                                        <option <?php if($level == '2A'){echo "selected";}?> value='2A'>2A</option>
                                                        <option <?php if($level == 'A'){echo "selected";}?> value='A'>A</option>
                                                        <option <?php if($level == 'B'){echo "selected";}?> value='B'>B</option>
                                                        <option <?php if($level == 'C'){echo "selected";}?> value='C'>C</option>
                                                        <option <?php if($level == 'D'){echo "selected";}?> value='D'>D</option>
                                                        <option <?php if($level == 'E'){echo "selected";}?> value='E'>E</option>
                                                        <option <?php if($level == 'F'){echo "selected";}?> value='F'>F</option>
                                                        <option <?php if($level == 'G'){echo "selected";}?> value='G'>G</option>
                                                        <option <?php if($level == 'H'){echo "selected";}?> value='H'>H</option>
                                                        <option <?php if($level == 'I'){echo "selected";}?> value='I'>I</option>
                                                        <option <?php if($level == 'J'){echo "selected";}?> value='J'>J</option>
                                                        <option <?php if($level == 'K'){echo "selected";}?> value='K'>K</option>
                                                        <option <?php if($level == 'L'){echo "selected";}?> value='L'>L</option>
                                                        <option <?php if($level == 'M'){echo "selected";}?> value='M'>M</option>
                                                        <option <?php if($level == 'N'){echo "selected";}?> value='N'>N</option>
                                                        <option <?php if($level == 'O'){echo "selected";}?> value='O'>O</option>
                                                        <option <?php if($level == 'X'){echo "selected";}?> value='X'>X</option>
                                                       
                                                    </select>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div>

                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Orang Tua</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="orang_tua" class="form-control" value="<?php echo $orang_tua ?>">                                            
                                                    </div>
                                                    <span class="help-block">Isilah Perwakilan Nama Orang Tua</span>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No Hp</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="no_hp" value="<?php echo $no_hp ?>" class="form-control" >                                            
                                                    </div>
                                                    <span class="help-block">Isilah No Hp Orang Tua</span>
                                                </div>
                                            </div>


                                               
                                            
                                         
                                        </div>
                                        
                                    </div>

                                </div>
                                <div class="panel-footer">
                                                                 
                                    <button type="submit" name="tambah" value="tambah" class="btn btn-primary pull-right">Edit</button>
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






