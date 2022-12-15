                  <div class="pcoded-content">
                      <!-- Page-header start -->
                      <div class="page-header">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h5 class="m-b-10">Hewan Langka</h5>
                                          <p class="m-b-0">Welcome to Website Hewan Langka</p>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <ul class="breadcrumb-title">
                                          <li class="breadcrumb-item">
                                              <a href="index.html"> <i class="fa fa-globe"></i></a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#">Hewan Langka</a>
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
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Hewan Langka</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="sub-title">Add Hewan</h4>
                                                        <form id="frm_hewan" action="fungsi/hewan.php" method="post" encypte="multipart/form-data">
                                                            <input id="action" type="hidden" value="add">
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Nama Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <input id="nama_hewan" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Habitat Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <input id="habitat_hewan" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Ciri-Ciri Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <textarea id="ciri_hewan" rows="10" cols="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Karakteristik Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <textarea id="karakteristik_hewan" rows="10" cols="5" class="form-control"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Jenis Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <input id="jenis_hewan" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Makanan Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <input id="makanan_hewan" type="text" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Foto Hewan</label>
                                                                <div class="col-sm-10">
                                                                    <input id="foto_hewan" type="file" class="form-control">
                                                                </div>
                                                                <label class="col-sm-2 col-form-label"></label>
                                                                <div class="col-sm-10">
                                                                    <p>Max File Size : 15Mb, FileType : (JPG, JPEG, PNG)</p>
                                                                </div>
                                                                <label class="col-sm-2 col-form-label"></label>
                                                                <div class="col-sm-10">
                                                                    <img id="preview_image" class="m-10" src="" style="width: 50%;">
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="row">
                                                            <div class="col-sm-8"></div>
                                                            <div class="col-sm-2" >
                                                                <button class="col-sm-12 btn btn-danger" onclick="showmenu('admin','hewan')">Cancel</button>
                                                            </div>
                                                            <div class="col-sm-2" >
                                                                <button class="col-sm-12 btn btn-primary" onclick="savehewan()">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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