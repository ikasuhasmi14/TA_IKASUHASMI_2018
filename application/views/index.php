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
                         
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                    <!-- START WIDGETS -->                    
                    <div class="row">
                        <div class="col-md-3">
                            
                            <!-- START WIDGET SLIDER -->
                                  
                            <!-- END WIDGET SLIDER -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET MESSAGES -->
                                      
                            <!-- END WIDGET MESSAGES -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET REGISTRED -->
                       
                            <!-- END WIDGET REGISTRED -->
                            
                        </div>
                        <div class="col-md-3">
                            
                            <!-- START WIDGET CLOCK -->
                                                            <div class="widget widget-info widget-padding-sm">
                                <div class="widget-big-int plugin-clock">00:00</div>                            
                                <div class="widget-subtitle plugin-date">Loading...</div>
                                <div class="widget-controls">                                
                                    <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="left" title="Remove Widget"><span class="fa fa-times"></span></a>
                                </div>                            
                                                           
                            </div>     
                            <!-- END WIDGET CLOCK -->
                            
                        </div>
                    </div>
                    <!-- END WIDGETS -->                    
                    
                    <div class="row">
                        <div class="col-md-4">
                            
                            <!-- START USERS ACTIVITY BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>SPP Matematika</h3>
                                        <span>Belum Lunas </span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>                                    
                                </div>                                
                                           <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Nama Siswa</th>
                                                    <th width="20%">Subjek</th>
                                                    <th width="30%">Bulan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php 


                                            $bulan_now = explode('-',date('d-m-y'));
                                            $bulan_sekarang = $bulan_now[1];
                                            $tahun_sekarang = $bulan_now[2];

                                       
                            $sql2 = "select data_siswa.id_siswa, data_siswa.nama, 
                            data_siswa.subject_mp, spp.status_pembayaran,spp.bulan,data_siswa.tanggal_masuk 
                            from data_siswa left outer join spp on data_siswa.id_siswa = spp.id_siswa 
                            where spp.status_pembayaran IS NULL or bulan < $bulan_sekarang group by data_siswa.id_siswa";
                             $query = $this->db->query($sql2);


                        foreach($query->result() as $aa) { 
                                                 $bulan = $aa->bulan;
                                                 $selisih = $bulan_sekarang - $bulan;
                                                 ?>
                                                <tr>
                                                      <td><strong><?=$aa->nama;?></strong></td>
                                                      <td><?=$aa->subject_mp;?></td> 
                                                  
                                                  <td>
                                                    <span class="label label-danger">
                                                        <?php 
                                                        $b = "Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember";
                                                        $ar = explode(" ",$b);
                                                        echo $ar[$bulan_sekarang-1];

                                                        ?>
                                                      </span>
                                                        
                                                    </td>
                                                   
                                                </tr>                                                
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>                               
                            </div>
                            <!-- END USERS ACTIVITY BLOCK -->
                            
                        </div>
                        <div class="col-md-4">
                            
                            <!-- START VISITORS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Sertifikat</h3>
                                        <span>untuk 3 tingkat diatas kelas</span>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Nama Siswa</th>
                                                    <th width="20%">Kelas</th>
                                                    <th width="30%">Level</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($sertif as $r) { ?>
                                            <tr>
                                            <td><strong><?php echo $r['nama']; ?></strong></td>
                                            <td><span class="label label-danger"><?php echo $r['kelas'];?></span></td>
                                            <td><span class="label label-danger"><?php echo $r['level'];?></span></td>
                                            </tr>
                                            <?php } ?>                              
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END VISITORS BLOCK -->
                            
                        </div>

						<div class="col-md-4">
                            
                            <!-- START PROJECTS BLOCK -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>SPP English</h3>
                                        <span>Belum Lunas</span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="50%">Nama Siswa</th>
                                                    <th width="20%">Subjek</th>
                                                    <th width="30%">Bulan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                            $bulan_now = explode('-',date('d-m-y'));
                                            $bulan_sekarang = $bulan_now[1];
                                            $tahun_sekarang = $bulan_now[2];

                                       
                            $sql2 = "select data_siswaenglish.id_siswaenglish, data_siswaenglish.nama, 
                            data_siswaenglish.subject_mp, spp2.status_pembayaran,spp2.bulan,data_siswaenglish.tanggal_masuk 
                            from data_siswaenglish left outer join spp2 on data_siswaenglish.id_siswaenglish = spp2.id_siswaenglish 
                            where spp2.status_pembayaran IS NULL or bulan < $bulan_sekarang group by data_siswaenglish.id_siswaenglish";
                             $query = $this->db->query($sql2);


                        foreach($query->result() as $aa) { 

                                                
                                                 $bulan = $aa->bulan;
                                                 $selisih = $bulan_sekarang - $bulan;

                                                 ?>
                                                 <tr> 
                                              <td><strong><?=$aa->nama;?></strong></td>
                                                      <td><strong><?=$aa->subject_mp;?></strong></td> 
                                                  
                                                  <td>
                                                    <span class="label label-danger">
                                                        <?php 
                                                        $b = "Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember";
                                                        $ar = explode(" ",$b);
                                                        echo $ar[$bulan_sekarang-1];

                                                        ?>
                                                      </span>
                                                        
                                                    </td>
                                                    
                                            </tr>
                                             <?php } ?>                                             
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- END PROJECTS BLOCK -->
                            
                        </div>
                    </div>
                    
                    <div class="row">
						<div class="col-md-8">
                            
                            <!-- START SALES BLOCK -->
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <h3>Tabel Level Kumon per bulan</h3>
                                        <span>MATH and English"</span>
                                    </div>
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                                            </ul>                                        
                                        </li>                                        
                                    </ul>
                                </div>
                                <div class="panel-body panel-body-table">
                                    
                                    <div class="table-responsive">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th width="30%">Nama Siswa</th>
                                                    <th width="20%">Kelas</th>
                                                    <th width="20%">Level</th>
                                                    <th widht="30%">Kumon</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($englishsiswa as $r) { ?>
                                            <tr>
                                            <td><strong><?php echo $r['nama']; ?></strong></td>
                                            <td><span class="label label-danger"><?php echo $r['kelas'];?></span></td>
                                            <td><span class="label label-danger"><?php echo $r['level'];?></span></td>
                                            <td><span class="label label-warning">English</span></td>
                                            </tr>
                                            <?php } ?>
                                            <?php foreach($mathsiswa as $r) { ?>
                                            <tr>
                                            <td><strong><?php echo $r['nama']; ?></strong></td>
                                            <td><span class="label label-danger"><?php echo $r['kelas'];?></span></td>
                                            <td><span class="label label-danger"><?php echo $r['level'];?></span></td>
                                            <td><span class="label label-success">Math</span></td>
                                            </tr>
                                            <?php } ?>                    
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                            <!-- END SALES BLOCK -->
                            
                        </div>
						<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-content">
								<ul class="list-inline item-details">
									<li><a href="http://themifycloud.com/downloads/janux-premium-responsive-bootstrap-admin-dashboard-template/">Admin templates</a></li>
									<li><a href="http://themescloud.org">Bootstrap themes</a></li>
								</ul>
							</div>
						</div>
                        
                        <div class="col-md-4">
                            
                            <!-- START SALES & EVENTS BLOCK -->
                           
                            <!-- END SALES & EVENTS BLOCK -->
                            
                        </div>
                    </div>
                    
                    <!-- START DASHBOARD CHART -->
					                   
                    <!-- END DASHBOARD CHART -->
                    
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
                            <a href="<?php echo site_url('Welcome/index')?>" class="btn btn-success btn-lg">Yes</a>
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






