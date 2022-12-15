            <?php
                $sql = "SELECT COUNT(*) as total_hewan_langka FROM tbl_animal a";
                $query = mysqli_query($conn, $sql);
                $hewanlangka = mysqli_fetch_assoc($query);

            ?>
            <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Dashboard</h5>
                                          <p class="m-b-0">Welcome to Website Hewan Langka</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-home"></i></a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- task, page, download counter  start -->
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col-8">
                                                                <h4 class="text-c-purple"><?php echo $hewanlangka['total_hewan_langka']; ?></h4>
                                                                <h6 class="text-muted m-b-0">Hewan Langka</h6>
                                                            </div>
                                                            <div class="col-4 text-right">
                                                                <i class="fa fa-globe f-28"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer bg-c-purple">
                                                        <div class="row align-items-center">
                                                            <div class="col-9">
                                                                <p class="text-white m-b-0">Total Hewan Langka</p>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <!-- <i class="fa fa-line-chart text-white f-16"></i> -->
                                                            </div>
                                                        </div>
            
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- task, page, download counter  end -->
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>