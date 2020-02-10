<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Codeo - Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/metisMenu.min.css') ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="row vh-100 bg-city">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="auth-logo-box">
                                    <a href="../analytics/analytics-index.html" class="logo logo-admin"><img src="<?php echo base_url('assets/images/logo_codeo.png') ?>" height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Login</h4>
                                    <p class="text-muted mb-0"></p>
                                </div><!--end auth-logo-text-->

                                
                                <?php  echo form_open('homelogincontroller', 'class="homelogin"');?>
                                    <input type="hidden" name="userIDLogin">
                                    <div class="form-group">
                                        <label for="username">Email</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <!--i class="dripicons-mail"--></i> 
                                            </span>
                                            <input type="text" class="form-control frm-new" id="username" name="emailLogin" placeholder="Enter email">
                                        </div>                                    
                                    </div><!--end form-group--> 

                
        
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <!--i class="dripicons-lock"--></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control frm-new" id="userpassword" placeholder="Enter password" name="passwordLogin">
                                        </div>                               
                                    </div><!--end form-group--> 

                                    
                                    </div><!--end form-group--> 
        
                                    <!--<div class="form-group row mt-4">
                                        <div class="col-sm-12">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                <label class="custom-control-label text-muted" for="customSwitchSuccess">By registering you agree to the Frogetor <a href="#" class="text-primary">Terms of Use</a></label>
                                            </div>
                                        </div><!--end col-->                                             
                                    <!--</div>--><!--end form-group--> 
        
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2" align="center">
                                            <button type="submit" class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit" style="width: 94%">Login <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                <?php echo form_close() ?>
                            </div><!--end /div-->
        
                            <div class="account-social text-center">
                                <a class="my-4" href="<?php echo base_url('registcontroller') ?>">Sign Up Here</a>
                                <ul class="list-inline mb-4">
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-facebook-f facebook"></i>
                                        </a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-twitter twitter"></i>
                                        </a>                                    
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="" class="">
                                            <i class="fab fa-google google"></i>
                                        </a>                                    
                                    </li>
                                </ul>
                            </div><!--end account-social-->
                            
                            <!--<div class="m-3 text-center text-muted">
                                <p class="">Already have an account ? <a href="../authentication/auth-login.html" class="text-primary ml-2">Sign In</a></p>
                            </div>-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end auth-page-->
                <div align="center" style="width: 100%;">
                    <span align="center">
                        ©2020 Five Angel Investment Limited - BVI
                    </span>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <!-- End Log In page -->

        <!-- jQuery  -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/waves.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js') ?>"></script>

        <!-- App js -->
        <script src="<?php echo base_url('assets/js/app.js') ?>"></script>

    </body>
</html>