<!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
            
              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-top: 5%;">
                    <!-- Authentication card start -->
                    
                        <form class="md-float-material form-material" action="fungsi/auth.php" method="post">
                            <!-- <div class="text-center">
                                <img src="includes/images/logo-hewan-langka.png" alt="logo-hewan-langka.png" width="8%">
                            </div> -->
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <?php
                                        if($_SESSION){
                                            ?>
                                            <div class="alert alert-danger" role="alert">Autentikasi gagal, silahkan periksa username dan password kembali</div>
                                            <?php
                                        }
                                    ?>
                                    
                                    <input type="hidden" name="action" class="form-control" value="login">
                                        
                                    <div class="form-group form-primary">
                                        <input type="text" name="username" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Username</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <!-- <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <input type="submit" style="width: 100%;" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" value="Sign in">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <a href="#" onclick="showmenu('user','hewan')" style="width: 100%;" class="btn btn-danger btn-md btn-block waves-effect waves-light text-center m-b-20" >Cancel</a>
                                        </div>
                                    </div>
                                    <!-- <hr/> -->
                                    <!-- <div class="row"> -->
                                        <!-- <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Thank you.</p>
                                            <p class="text-inverse text-left"><a href="#" onclick="showmenu('user','beranda');"><b>Back to website</b></a></p>
                                        </div> -->
                                        <!-- <div class="col-md-2">
                                            <img src="includes/images/logo-hewan-langka.png" alt="logo-hewan-langka.png" width="100%">
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>