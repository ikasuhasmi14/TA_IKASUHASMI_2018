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
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="<?php echo site_url('c_beranda/index')?>">Admin Kumon</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        
                        <div class="profile">
                           
                            <div class="profile-data">
                                <div class="profile-data-name"> Selamat Datang, <?php echo $this->session->userdata('loger')?></div>
                                
                            </div>
                            
                        </div>                                                                        
                    </li>
                 
                    <li class="active">
                        <a href="<?php echo site_url('c_beranda/index')?>"><span class="fa fa-desktop"></span> <span class="xn-text">Beranda</span></a>                        
                    </li>   
                                     
                   <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Siswa</span></a>
                        <ul>
                           
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswa')?>"><span class="fa fa-users"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswa2')?>"><span class="fa fa-users"></span> ENGLISH</a></li>
                            
</ul>

                            <li>
                                <a href="<?php echo site_url('c_beranda/data_laporan')?>"><span class="fa fa-book"></span> Buku Nilai</a>
                               
                            </li>
                             <li>
                                <a href="<?php echo site_url('c_beranda/Absensisiswa')?>"><span class="fa fa-file-o"></span>Absensi</a>
                               
                            </li>
                             <li>
                                <a href="<?php echo site_url('c_beranda/menu_spp')?>"><span class="fa fa-credit-card"></span>SPP</a>
                              
                            </li>
                            
                    
                    </li>
                           
                            
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            
                 
                </ul>
                <!-- END X-NAVIGATION -->
            </div>         <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                   
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
               
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tabel Nilai <?php echo $nama?></h3>
                                                                     
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th width="10">Student ID</th>
                                                    <th width="10">School Grade</th>
                                                    <th width="100">DOB</th>
                                                    <th width="50">Enrolment Date</th>
                                                    <th width="10">Start Point</th>
                                                    <th width="100">Student Name</th>
                                                    <th width="10">Type</th>
                                                    <th width="100">Date</th>
                                                    <th width="30">Group</th>
                                                     <th width="30">Score</th>
                                                      <th width="30">Time</th>
                                                       <th width="30">Current Level</th>
                                                    <th width="100">actions</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>

                             <?php 
                                    $sql =  "select * from data_siswaenglish join data_nilai2 on data_siswaenglish.id_siswaenglish = data_nilai2.id_siswaenglish where data_nilai2.id_siswaenglish=$id_siswaenglish";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $r) { 
                                    ?>  
                                                 <tr> 
                                               <td><?= $r->id_siswaenglish?></td>
                                                    <td><?= $r->kelas?></td>
                                                    <td><strong><?php echo $r->tanggal_lahir?></strong></td>
                                                    <td><strong><?php echo $r->tanggal_masuk?></strong></td>
                                                    <td><?php echo $r->level_awal?></span></td>
                                                    <td><?php echo $r->nama?></td>
                                                    <td><?php echo $r->tipe_test?></td>
                                                    <td><strong><?php echo $r->tanggal_test?></td>
                                                    <td><?php echo $r->grup?></td>
                                                    <td><?php echo $r->nilai?>/<?php echo $r->dari?></td>
                                                    <td><?php echo $r->waktu?>/<?php echo $r->darimenit?></td>
                                                     <td><?= $r->level?></td>

                                                      <td>
                                                        <a href="<?php echo site_url('c_beranda/form_editabsensis/'.$r->id_siswaenglish);?>" class="btn btn-default btn-rounded btn-sm" ><span class="fa fa-pencil"></span></a>
                                                        
                                                    </td>

                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>                                    
                                  
                                </div>

                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            

                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
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
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/tableExport.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jquery.base64.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/html2canvas.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
      
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>        
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>






