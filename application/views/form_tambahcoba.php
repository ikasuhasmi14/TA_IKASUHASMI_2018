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
                            
                            <form action="<?php echo site_url('c_beranda/insertcoba')?>" method="post" class="form-horizontal">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form Tambah Siswa Matematika Coba Gratis</strong></h3>
                                   
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
                                                        <input type="text" name="nama" class="form-control"/>
                                                    </div>            
                                                    <span class="help-block">Isilah Nama Siswa</span>
                                                </div>
                                            </div>
                                            
                                          
                                            
                                              <div class="form-group">
                                                <label class="col-md-3 control-label">Kelas</label>
                                                <div class="col-md-9">                                                                                            
                                                    <select class="form-control select" name="kelas">
                                                        <option value="TK A">TK A</option>
                                                        <option value="TK B">TK B</option>
                                                        <option value="1 SD">1 SD</option>
                                                        <option value="2 SD">2 SD</option>
                                                        <option value="3 SD">3 SD</option>
                                                        <option value="4 SD">4 SD</option>
                                                        <option value="5 SD">5 SD</option>
                                                        <option value="6 SD">6 SD</option>
                                                        <option value="1 SMP">1 SMP</option>
                                                        <option value="2 SMP">2 SMP</option>
                                                        <option value="3 SMP">3 SMP</option>
                                                        <option value="1 SMA">1 SMA</option>
                                                        <option value="2 SMA">2 SMA</option>
                                                        <option value="3 SMA">3 SMA</option>

                                                       
                                                    </select>
                                                    <span class="help-block">Isilah Tingkatan kelas</span>
                                                </div>
                                            </div>

                                              <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Level Awal</label>
                                                 <div class="col-md-9">
                                                    <!-- <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="level" value="<?php echo $level ?>"class="form-control" >                                            
                                                    </div>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div> -->
                                            <select class="form-control select" name="level_awal">
                                                        <option   value='7A'>7A</option>
                                                        <option   value='6A'>6A</option>
                                                        <option   value='5A'>5A</option>
                                                        <option  value='4A'>4A</option>
                                                        <option  value='3A'>3A</option>
                                                        <option  value='2A'>2A</option>
                                                        <option  value='A'>A</option>
                                                        <option  value='B'>B</option>
                                                        <option  value='C'>C</option>
                                                        <option  value='D'>D</option>
                                                        <option  value='E'>E</option>
                                                        <option  value='F'>F</option>
                                                        <option  value='G'>G</option>
                                                        <option  value='H'>H</option>
                                                        <option  value='I'>I</option>
                                                        <option  value='J'>J</option>
                                                        <option  value='K'>K</option>
                                                        <option  value='L'>L</option>
                                                        <option  value='M'>M</option>
                                                        <option  value='N'>N</option>
                                                        <option  value='O'>O</option>
                                                        <option  value='X'>X</option>
                                                       
                                                    </select>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div>
                                    


                                        <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Tanggal Lahir</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="Pilih Tanggal Lahir" name="tanggal_lahir">                                            
                                                    </div>
                                                    <span class="help-block">Klik Untuk Memunculkan Tanggal</span>
                                                </div>
                                            </div>

                                            

                                             

                                            
                                            
                                        </div>


                                     

                                        <div class="col-md-6">

                                              
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Orang Tua</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="orang_tua"class="form-control" value="">                                            
                                                    </div>
                                                    <span class="help-block">Isilah Perwakilan Nama Orang Tua</span>
                                                </div>
                                            </div>
                                            
                                            
                                           
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">No Hp</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="number" name="no_hp" class="form-control" value="">                                            
                                                    </div>
                                                    <span class="help-block">Isilah No Hp Orang Tua</span>
                                                </div>
                                                </div>

                                                 <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Tanggal Masuk Kelas </label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="<?php echo date("Y-M-d");?>" name="tanggal_masuk">                                            
                                                    </div>
                                                    <span class="help-block">Klik Untuk Memunculkan Tanggal</span>
                                                </div>
                                            </div>

                                                     <div class="form-group">
                                                <label class="col-md-3 control-label">subjek</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>

                                                        <input type="" name="subject_mp" class="form-control" readonly value=<?php echo "Matematika"?>>
                                                    </div>            
                                                    
                                                </div>
                                            </div>


                                          
               
                                 

                                                   </div>                             
                                                                                
                                          </div>                                   
                                    </div>
                          
                                <div class="panel-footer">
                                                                        
                                    <button type="submit" name="tambah" value="tambah" class="btn btn-primary pull-right"  >Tambah</button>
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






