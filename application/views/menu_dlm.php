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
                <!-- START CONTENT FRAME -->
                <div class="content-frame">   
                    
                    <!-- START CONTENT FRAME TOP -->
                   
                    <div class="content-frame-top">                        
                        <div class="page-title">    
                                        
                            <h2><span class="fa fa-users"></span><?php echo $nama; ?></h2>
                           
                        </div>                                      
                                      
                    </div>
                    
                    <!-- START CONTENT FRAME RIGHT -->
                    
                    <!-- END CONTENT FRAME RIGHT -->
                
                    <!-- START CONTENT FRAME BODY -->
                    <div class="content-frame-body content-frame-body-left">
                         
                       
                        <div class="gallery" id="links">
                                   
                                                                   
                             
                            <a class="gallery-item" href="<?php echo site_url('c_beranda/form_absen/').$nama."/".$id_asisten;?>" title="Girls Image 3" data-gallery>
                                <div class="image">
                                    <img src="<?php echo base_url(); ?>assets/assets/images/gallery/absensi.jpg" alt="Girls Image 3"/>    
                                                                                                   
                                </div>
                                <div class="meta">
                                    <strong>Absensi</strong>
                                    
                                </div>                                
                            </a>                                                      
                             
                            <!-- <a class="gallery-item" href="<?php echo site_url('c_beranda/form_spp/').$id_siswa."/".$level; ?>" title="Nature Image 7" data-gallery>
                                <div class="image">
                                    <img src="<?php echo base_url(); ?>assets/assets/images/gallery/spp.png" alt="Nature Image 7"/>
                                   
                                </div>
                                <div class="meta">
                                    <strong>SPP</strong>
                                    
                                </div>                                
                            </a>    -->                                                 
                            
                           
                        </div>
                             
                      
                    </div>       
                    <!-- END CONTENT FRAME BODY -->
                </div>               
                <!-- END CONTENT FRAME -->
                                
                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- BLUEIMP GALLERY -->
        
        <!-- END BLUEIMP GALLERY -->
        
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
                            <a href="file:///C|/xampp/htdocs/ika/login/assets/pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="file:///C|/xampp/htdocs/ika/login/assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="file:///C|/xampp/htdocs/ika/login/assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->              
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
       
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->

          
        
    <!-- END SCRIPTS -->         
    </body>
</html>






