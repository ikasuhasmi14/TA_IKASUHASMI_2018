<?php
include 'koneksi.php';
?>
<!DOCTYPE html>

<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Daftar Siswa Kumon Coba Gratis Matematika</title>            
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
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Daftar Siswa Kumon Matematika Coba Gratis</h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                   <!--  <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                            <div class="panel-body">
                            <form class="form-horizontal">
                            <div class="form-group">
                            <div class="col-md-4">
								<a href="<?php echo site_url('c_beranda/form_tambahcoba')?>"  class="btn btn-success btn-block"><span class="fa fa-plus"></span> Tambah Siswa</a>
                                    </div>
                                     
								</div>
								</form>
						</div>
                    </div>
					</div>
					</div> -->
                    
                         
                <div class="row">
                        <div class="col-md-12">
                    
                   <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Eksport Data Tabel Siswa Matematika</h3>
                                    <div class="btn-group pull-right">
                                        <button> <a href="" ><i class="fa fa-file-pdf-o"></i> Cetak PDF </a></button>
                                       
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Level</th>
                                                <th>No Hp</th>
                                                <th>Level Awal</th>
                                                 <th>Tanggal Masuk</th>
                                                 <th>orang Tua</th>
                                                 <!-- <th>Aksi</th> -->
                                                   
                                                     
                                            </tr>
                                        </thead>
                                        <tbody>

                                <?php 
                                    foreach ($hasil as $r) {
                                        
                                
                                    ?>      
                                                 <tr> 
                                               <td><strong><?php echo $r ['nama'];?></strong></td>
                                                    <td><?php echo $r['kelas'];?></td>
                                                    <td><strong><?php echo $r['level'];?></strong></td>
                                                    <td><strong><?php echo $r['no_hp'];?></strong></td>
                                                    <td><?php echo $r['level_awal'];?></td>
                                                    <td><?php echo $r['tanggal_masuk'];?></td>
                                                    <td><?php echo $r['orang_tua'];?></td>
                                                    <!-- <td><a href="<?php echo site_url('c_beranda/menu_dlmcoba/').$r['nama']."/".$r['id_coba'];?>" class=""><span class="fa fa-info-circle"></span>&nbsp;Detail</a> &nbsp; &nbsp; <a href="<?php echo site_url('c_beranda/form_editsiswacoba/'.$r['id_coba'])?>" class=""><span class="fa fa-pencil-square-o"></span>Edit</a>
                                                         </td>
 -->
                                                  
                                                   
                                                    
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>                                    
                                  
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






    