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
                    <h2><span class="fa fa-users"></span> Daftar Nilai Kumon Matematika</h2>
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
                                <a href="<?php echo site_url('c_beranda/menu_nilai/').$nama."/".$id_siswa;?>"  class="btn btn-success btn-block">Lihat Tabel nilai <?php echo $nama ?></a>
                                    </div>
                                     
                                </div>
                                </form>
                        </div>
                    </div>
                    </div>
                   
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            
                           <form action="<?php echo site_url('c_beranda/insertnilai')?>" id="form1" name="form1" class="form-horizontal" method="post">
                            <div class="panel panel-default">


                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Form Nilai</strong></h3>
                                    <ul class="panel-controls">
                                      
                                    </ul>
                                </div>
                             
                                <div class="panel-body">                                                                        
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">ID Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="id_siswa" readonly value="<?php echo $id_siswa ?>"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>

                                      <?php 
                                    $sql =  "select * from data_siswa where id_siswa=$id_siswa";
                                     $query = $this->db->query($sql);

                        foreach($query->result() as $a) { 
                                    ?>   

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nama Siswa</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="nama" readonly value="<?=$a->nama?>"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>

                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Tipe Test</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="tipe_test" readonly value="<?php echo "AT"?>"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>

                                      <script>
function tampilkan(){
  var id_user=document.getElementById("form1").levell.value;
  if (id_user=="4A")
    {
        document.getElementById("dari").value = '70';
       
    }

else if (id_user=="2A")
    {
        document.getElementById("dari").value = '100';
       
    }
else if (id_user=="A")
    {
        document.getElementById("dari").value = '100';
       
    }
else if (id_user=="D")
    {
        document.getElementById("dari").value = '70';
       
    }
else if (id_user=="E")
    {
        document.getElementById("dari").value = '70';
       
    }
else if (id_user=="F")
    {
        document.getElementById("dari").value = '50';
       
    }
else if (id_user=="G")
    {
        document.getElementById("dari").value = '50';
       
    }
else if (id_user=="H")
    {
        document.getElementById("dari").value = '40';
       
    }
else if (id_user=="I")
    {
        document.getElementById("dari").value = '40';
       
    }
else if (id_user=="J")
    {
        document.getElementById("dari").value = '30';
       
    }
else if (id_user=="K")
    {
        document.getElementById("dari").value = '20';
       
    }
else if (id_user=="L")
    {
        document.getElementById("dari").value = '14';
       
    }
else if (id_user=="N")
    {
        document.getElementById("dari").value = '22';
       
    }
else if (id_user=="M")
    {
        document.getElementById("dari").value = '18';
       
    }
else if (id_user=="O")
    {
        document.getElementById("dari").value = '18';
       
    }

 else
    {
       document.getElementById("dari").value = '80';
     
    }



}

</script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Level</label>
                                               <div class="col-md-6 col-xs-12">  
                                                    <!-- <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="level" value="<?php echo $level ?>"class="form-control" >                                            
                                                    </div>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div> -->
                                            <select class="form-control select" name="levell"  id="levell" onchange="tampilkan()">
                                                        <option value='0' disabled="disabled" selected/>Pilih</option>
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
                                                      
                                                       
                                                    </select>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div>
                                    
                                    

                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Start Point</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="level_awal" readonly value="<?=$a->level_awal?>"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>

                                    <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Current Level</label>
                                               <div class="col-md-6 col-xs-12">  
                                                    <!-- <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="level" value="<?php echo $level ?>"class="form-control" >                                            
                                                    </div>
                                                    <span class="help-block">Isilah Level Kumon</span>
                                                </div>
                                            </div> -->
                                            <select class="form-control select" name="level" value="<?php echo $level ?>">
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
                                        <label class="col-md-3 col-xs-12 control-label"></label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="sheet"/>
                                            </div>                                            
                                            <span class="help-block">This is sample of text field</span>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="form-group">                                        
                                        <label class="col-md-3 col-xs-12 control-label">Tanggal Test</label>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                                        <input type="text" class="form-control datepicker" value="Pilih Tanggal Test" name="tanggal_test">                                            
                                                    </div>
                                            <span class="help-block">Click on input field to get datepicker</span>
                                        </div>
                                    </div>


                                     <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Grup</label>
                                        <div class="col-md-6 col-xs-12">                                                                                            
                                            <select class="form-control select" name="grup">
                                                <option>Pilih</option>
                                                <option>I</option>
                                                <option>II</option>
                                                <option>III</option>
                                                <option>IV</option>
                                                <option>V</option>
                                                
                                            </select>
                                            <span class="help-block">Select box example</span>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Nilai</label> 
                                        <input type="text" name="nilai"/> 
                                        
                                    </div>

                                   <!--  <?php 
                         

                                    if (isset($_POST['levell']) == "4A"){
                                        $dari = "70";
                                    }
                                    else if (isset($_POST['levell']) == "3A"){
                                         $dari = "80";
                                    }
                                    
                                    else{
                                         $dari = "100";
                                    }
                                    ?> -->
                                   
                                   <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label" >Dari</label>
                                        <input type="text"  id="dari" name="dari" readonly value=""/> Soal
                                       
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Waktu</label> 
                                        <input type="text" name="waktu"/> 
                                        
                                    </div>

                                       <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Dari</label> 
                                                                                                               
                                            <select name="darimenit">
                                                <option>Pilih</option>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                                <option>50</option>
                                                
                                            </select> Menit
                                            
                                        
                                    </div>


                                    
                                    <?php } ?>
                                </div>

                               
                                <div class="panel-footer">
                                                                
                                    <button class="btn btn-primary pull-right" name="tambah">Submit</button>
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






