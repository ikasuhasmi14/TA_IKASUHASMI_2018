   <div class="row">
                       <?php foreach($hasil as $r) { ?>
						
                        <div class="col-md-3">
                            <!-- CONTACT ITEM -->
                            
                           <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="panel-title-box">
                                        <img src="<?php echo base_url(); ?>assets/assets/images/users/Kumon_Logo.jpg" width="50px" height="30px"/>
                                        
                                        <a href="<?php echo site_url('c_beranda/menu_dlmcoba2/').$r['nama']."/".$r['id_coba2']    ;?>" >
                                        <h3><?php echo $r['nama'];?></h3> </a>
                                        <span>Kelas <?php echo $r['kelas'];?></span>
                                    </div>                                    
                                    <ul class="panel-controls" style="margin-top: 2px;">
                                      
                                        <li><a href="<?php echo site_url('c_beranda/form_editsiswacoba2/'.$r['id_coba2'])?>" class=""><span class="fa fa-pencil-square-o"></span></a></li>
                                        <li class="dropdown">
                                            <a href="#" class="panel-collapse" data-toggle="dropdown"><span class="fa fa-info"></span></a>                                        
                                                                            
                                        </li>                                        
                                    </ul>                                    
                                </div>                                
                                <div class="panel-body padding-0">
                                    <p><small>Subjek</small><br/><?php echo $r['subject_mp'];?></p>
                                     <p><small>Level Awal</small><br/><?php echo $r['level_awal'];?></p>
                                      <p><small>Level</small><br/><?php echo $r['level'];?></p>
                                    <p><small>Tanggal Masuk</small><br/><?php echo $r['tanggal_masuk'];?></p> 

                                </div>                                    
                            </div>
                                                            
                          
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
                  