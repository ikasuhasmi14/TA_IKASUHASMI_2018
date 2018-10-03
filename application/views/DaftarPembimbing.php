<?php
include 'koneksi.php';
?>
<!DOCTYPE html>

<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Menu Daftar Asisten Pembimbing Kumon Matematika </title>            
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
                    <h2><span class="fa fa-users"></span> Daftar Asisten Pembimbing Kumon Matematika </h2>
                </div>
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                            <div class="panel-body">
                            <form class="form-horizontal">
                            <div class="form-group">
                            <div class="col-md-4">
								<a href="<?php echo site_url('c_beranda/form_tambahasisten')?>"  class="btn btn-success btn-block"><span class="fa fa-plus"></span> Tambah Asisten</a>
                                    </div>
                                     
								</div>
								</form>
						</div>
                    </div>
					</div>
					</div>

         <div class="row">
                        <div class="col-md-12">
                    
                   <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tabel Siswa Matematika</h3>
                                    <div class="btn-group pull-right">
                                       <!--  <button> <a href="<?php echo site_url('c_beranda/siswa_report')?>" ><i class="fa fa-file-pdf-o"></i> Cetak PDF </a></button> -->
                                    </div>                                    
                                    
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                 <th>Bidang</th>
                                                <th>No Hp</th>
                                                 <th>Tanggal Masuk</th>
                                             <th>Tanggal Lahir</th>
                                                 <th>Aksi</th>
                                                   
                                                     
                                            </tr>
                                        </thead>
                                        <tbody>

                                <?php 
                                    foreach ($hasil as $r) {
                                        
                                
                                    ?>      
                                                 <tr> 
                                               <td><strong><?php echo $r ['nama'];?></strong></td>
                                                    <td><?php echo $r['bidang'];?></td>
                                                    <td><strong><?php echo $r['no_hp'];?></strong></td>
                                                    <td><?php echo $r['tanggal_masuk'];?></td>
                                                    <td><?php echo $r['tanggal_lahir'];?></td>
                                                    <td><a href="" class=""><span class="fa fa-info-circle"></span>&nbsp;Detail</a> &nbsp; &nbsp; <a href="" class=""><span class="fa fa-pencil-square-o"></span>Edit</a>
                                                         </td>

                                                  
                                                   
                                                    
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>                                    
                                  
                                </div>

                              
                            <!-- END DATATABLE EXPORT -->                            
                   
    </div>
                    </div>
                </div>








                    
                <!--     <div class="row">
 -->                 <!--       <?php foreach($hasil as $r) { ?> -->
						
                <!--         <div class="col-md-3"> -->
                            <!-- CONTACT ITEM -->
                     
                  <!--          <div class="panel panel-default">
                         
                                <div class="panel-heading">
                                     
                                    <div class="panel-title-box">

                                        <img src="<?php echo base_url(); ?>assets/assets/images/users/Kumon_Logo.jpg" width="50px" height="30px"/>
                                        
                                        <a href="<?php echo site_url('c_beranda/menu_dlm/').$r['nama']."/".$r['id_asisten'];?>" >
                                        <h3><?php echo $r['nama'];?></h3> </a>
                                        
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                      
                                        <li><a href="<?php echo site_url('c_beranda/form_editsiswa/'.$r['id_asisten'])?>" class=""><span class="fa fa-pencil-square-o"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="panel-collapse" data-toggle="dropdown"><span class="fa fa-info"></span></a>                                        
                                                                            
                                        </li>                                        
                                    </ul>  
                                                            
                                </div>      
                                                            
                                <div class="panel-body padding-0">
                                   
                                          <p><small>Bidang</small><br/><?php echo $r['bidang'];?></p>
                                        
                                        <p><small>Tanggal Masuk</small><br/><?php echo $r['tanggal_masuk'];?></p> 

                                </div>   

                            </div> -->


  <!-- START DATATABLE EXPORT -->
                    <!--         <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Tabel Siswa Matematika</h3>
                                    <div class="btn-group pull-right">
                                       <!--  <button> <a href="<?php echo site_url('c_beranda/siswa_report')?>" ><i class="fa fa-file-pdf-o"></i> Cetak PDF </a></button> -->
                                    </div>     -->                                
                        <!--             
                                </div>
                                <div class="panel-body">
                                    <table id="customers2" class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                              <th>Bidang</th>
                                                 <th>Tanggal Masuk</th>
                                                
                                                 <th>Aksi</th>
                                                   
                                                     
                                            </tr>
                                        </thead>
                                        <tbody> -->

            <!--                     <?php 
                                    foreach ($hasil as $r) {
                                        
                                
                                    ?>      
                                                 <tr> 
                                               <td><strong><?php echo $r ['nama'];?></strong></td>
                                                   <td><strong><?php echo $r ['bidang'];?></strong></td>
                                                    <td><?php echo $r['tanggal_masuk'];?></td>
                                                
                                                    <td><a href="<?php echo site_url('c_beranda/menu_dlm/').$r['nama']."/".$r['id_asisten'];?>" class=""><span class="fa fa-info-circle"></span>&nbsp;Detail</a> &nbsp; &nbsp; <a href="" class=""><span class="fa fa-pencil-square-o"></span>Edit</a>
                                                         </td>

                                                  
                                                   
                                                    
                                            </tr>
                                             <?php } ?>
                                        </tbody>
                                    </table>                                    
                                  
                                </div>
</div>
</div> -->
                              
                            <!-- END DATATABLE EXPORT -->                  

                                                            
                   
                            <!-- END CONTACT ITEM -->

                            <!--Display Modal Pop Up -->

                                <!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               This Modal title
            </h4>
         </div>
         
         <div class = "modal-body">
            Add some text here
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               Close
            </button>
            
            <button type = "button" class = "btn btn-primary">
               Submit changes
            </button>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
                            <!--END Modal Pop Up -->
                        </div>
                         <?php } ?> 
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="pagination pagination-sm pull-right push-down-10 push-up-10">
                                <li class="disabled"><a href="#">«</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>                                    
                                <li><a href="#">»</a></li>
                            </ul>                            
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
         <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






