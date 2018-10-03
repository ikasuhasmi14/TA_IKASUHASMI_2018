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
            
            <?php $this->load->view('frame/side_nav')?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
        <?php $this->load->view('frame/header')?>

<!-- PAGE TITLE -->


                <div class="page-title">                    
                    <h2>Tabel Absen Siswa English Kumon </h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    
                    
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                    <h3 class="panel-title">Tabel Absen Siswa English Kumon</h3>
                                                        <?=$this->session->flashdata('notif')?>             
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Subjek</th>
                                                <th>Level</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Keluar</th>
                                                 <th>Aksi</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>


                                 <?php 

                                    $sql =  "select * from absensis where subject_mp ='English';";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $r) { 
                                    ?>  
                                                 <tr> 
                                              <td><?= $r->nama;?></td>
                                                    <td><strong><?= $r->subject_mp;?></strong></td>
                                                    <td><strong><?= $r->level;?></strong></td>
                                                    <td><span class="label label-success"><?= $r->tanggal_masuk;?></span></td>
                                                    <td><?= $r->jam_masuk;?></td>
                                                    <td><?= $r->jam_keluar;?></td>

                                                     <td>
                                                        <a href="<?php echo site_url('c_beranda/form_editabsensis2/'.$r->id_absensis);?>" class="btn btn-default btn-rounded btn-sm" ><span class="fa fa-pencil"></span></a>
                                                        
                                                    </td>
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>                                    
                                  
                                </div>

                            </div>


                                  <div class="panel panel-default">
                                <div class="panel-heading">
                                    
                                    <h3 class="panel-title">Tabel Absen Siswa Kumon Coba Gratis</h3>
                                                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Subjek</th>
                                                <th>Kelas</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jam Masuk</th>
                                                <th>Jam Keluar</th>
                                                 <th>Aksi</th>
                                                  
                                            </tr>
                                        </thead>
                                        <tbody>


                                 <?php 

                                    $sql =  "select * from absen_coba where subject_mp ='English';";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $r) { 
                                    ?>  
                                                 <tr> 
                                                    <td><?= $r->nama;?></td>
                                                    <td><strong><?= $r->subject_mp;?></strong></td>
                                                     <td><strong><?= $r->kelas;?></strong></td>                                                    
                                                    <td><span class="label label-success"><?= $r->tanggal_masuk;?></span></td>
                                                    <td><?= $r->jam_masuk;?></td>
                                                    <td><?= $r->jam_keluar;?></td>

                                                     <td>
                                                        <a href="<?php echo site_url('c_beranda/form_editabsencoba2/'.$r->id_absencoba);?>" class="btn btn-default btn-rounded btn-sm" ><span class="fa fa-pencil"></span></a>
                                                        
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
        <script src="jquery.min.js"></script>
             
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>





