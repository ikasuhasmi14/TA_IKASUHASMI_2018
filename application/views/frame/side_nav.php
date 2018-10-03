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
                         <?php if($this->session->userdata('jabatan') == 'admin'): ?>  

                         <li class="xn-openable">
                                <a href=""><span class="fa fa-user"></span> <span class="xn-text">Daftar Asisten Pembimbing</span></a>
                                <ul>
                                <li><a href="<?php echo site_url('c_beranda/DaftarPembimbing')?>"><span class="fa fa-users"></span> <span class="xn-text">MATH</span></a></li>
                                <li><a href="<?php echo site_url('c_beranda/DPeng')?>"><span class="fa fa-users"></span> <span class="xn-text">ENGLISH</span></a></li>
                            </ul>
                        </li>

                        <li>
                                <a href="<?php echo site_url('c_beranda/AbsenPembimbing')?>"><span class="fa fa-files-o"></span> <span class="xn-text">Absen Asisten Pembimbing</span></a>
                        </li>          
                   <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Siswa</span></a>
                        <ul>
                           
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswaAdmin')?>"><span class="fa fa-users"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswa2Admin')?>"><span class="fa fa-users"></span> ENGLISH</a></li>
                            </ul>
                            
                            <li class="xn-openable">
                                 <a href="#"><span class="glyphicon glyphicon-book"></span> <span class="xn-text">Buku Nilai</span></a>
                                <ul>
                               <li> <a href="<?php echo site_url('c_beranda/data_laporan')?>"><span class="fa fa-book"></span>MATH</a></li>
                               <li> <a href="<?php echo site_url('c_beranda/data_laporan2')?>"><span class="fa fa-book"></span>ENG</a></li>

            
                            </li>
                        </ul>
                        
                             <li class="xn-openable">
                                <a href="#"><span class="glyphicon glyphicon-pushpin"></span> <span class="xn-text">Absensi</span></a>
                                <ul>
                               <li> <a href="<?php echo site_url('c_beranda/AbsensisiswaAdmin')?>"><span class="fa fa-file-o"></span>MATH</a></li>
                               <li> <a href="<?php echo site_url('c_beranda/AbsensisiswaengAdmin')?>"><span class="fa fa-file-o"></span>ENG</a></li>
                               </ul>
                            </li>

                              <li class="xn-openable">
                                <a href=""><span class="fa fa-credit-card"></span>SPP</a>
                               <ul>
                                 <li><a href="<?php echo site_url('c_beranda/menu_sppAdmin')?>"><span class="fa fa-credit-card"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/menu_spp2Admin')?>"><span class="fa fa-credit-card"></span> ENGLISH</a></li>
                            
                        </ul>
                            </li>

                              <li class="xn-openable">
                                <a href=""><span class="fa fa-pencil"></span>Coba Gratis</a>
                               <ul>
                                 <li><a href="<?php echo site_url('c_beranda/cobaAdmin')?>"><span class="fa fa-credit-card"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/coba2Admin')?>"><span class="fa fa-credit-card"></span> ENGLISH</a></li>
                            
                        </ul>
                            </li>
                             <li class="xn-openable">
                                <a href="<?php echo site_url('c_beranda/reports')?>"><span class="fa fa-users"></span>Report</a>
                            </li>

                    
                    </li>
                           
                        <?php endif; ?> 

                        <?php if($this->session->userdata('jabatan') == 'guru'): ?>   


                        <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Siswa</span></a>
                        <ul>
                           
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswa')?>"><span class="fa fa-users"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/menu_daftarsiswa2')?>"><span class="fa fa-users"></span> ENGLISH</a></li>
                            </ul>
                            
                            <li class="xn-openable">
                                 <a href="#"><span class="glyphicon glyphicon-book"></span> <span class="xn-text">Buku Nilai</span></a>
                                <ul>
                               <li> <a href="<?php echo site_url('c_beranda/data_laporan')?>"><span class="fa fa-book"></span>MATH</a></li>
                               <li> <a href="<?php echo site_url('c_beranda/data_laporan2')?>"><span class="fa fa-book"></span>ENG</a></li>

            
                            </li>
                        </ul>
                        
                             <li class="xn-openable">
                                <a href="#"><span class="glyphicon glyphicon-pushpin"></span> <span class="xn-text">Absensi</span></a>
                                <ul>
                               <li> <a href="<?php echo site_url('c_beranda/Absensisiswa')?>"><span class="fa fa-file-o"></span>MATH</a></li>
                               <li> <a href="<?php echo site_url('c_beranda/Absensisiswaeng')?>"><span class="fa fa-file-o"></span>ENG</a></li>
                               </ul>
                            </li>

                              <li class="xn-openable">
                                <a href=""><span class="fa fa-credit-card"></span>SPP</a>
                               <ul>
                                 <li><a href="<?php echo site_url('c_beranda/menu_spp')?>"><span class="fa fa-credit-card"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/menu_spp2')?>"><span class="fa fa-credit-card"></span> ENGLISH</a></li>
                            
                        </ul>
                            </li>

                              <li class="xn-openable">
                                <a href=""><span class="fa fa-pencil"></span>Coba Gratis</a>
                               <ul>
                                 <li><a href="<?php echo site_url('c_beranda/coba')?>"><span class="fa fa-credit-card"></span> MATH</a></li>
                            <li><a href="<?php echo site_url('c_beranda/coba2')?>"><span class="fa fa-credit-card"></span> ENGLISH</a></li>
                            
                        </ul>
                            </li>
                    
                    </li>

                        

                   <?php endif; ?> 

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->