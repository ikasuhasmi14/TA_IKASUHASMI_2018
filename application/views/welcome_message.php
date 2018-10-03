
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Login Admin Kumon</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
        

                            <!-- LOGIN WIDGET -->
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h2>Log In</h2>
                                     <form action="<?php echo site_url('welcome/login')?>" method="post">
                                    <p>Harap isi informasi pribadi anda pada kolom berikut :</p>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" placeholder="Username" name="user"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Your Password" name="pass"/>
                                    </div>                                
                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <div class="checkbox">
                                               <?php echo $this->session->flashdata('err') ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-success btn-block" name="login">Log In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <!-- END LOGIN WIDGET -->

                       
           <div class="pull-left">
                        &copy; Kumon Paus Rumbai
                    </div>
                <div class="login-footer">
                   
                   
                </div>
            </div>
            
        </div>
        
    </body>
</html>






