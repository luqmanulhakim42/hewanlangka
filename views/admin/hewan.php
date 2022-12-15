<?php
    $sql = "SELECT * FROM tbl_animal";
    $query = mysqli_query($conn, $sql);
?>
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
                                        <!-- Hover table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>List Hewan Langka</h5>
                                                <div class="card-header-right">
                                                    <ul class="list-unstyled card-option">
                                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                                        <li><i class="fa fa-refresh reload-card"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="m-10">
                                                    <a href="#" onclick="showmenu('admin','add_hewan');" class="btn btn-primary">Add Hewan</a>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-hover" id="table">
                                                        <thead>
                                                            <tr>
                                                                <th width="5%">#</th>
                                                                <th width="20%">Nama Hewan</th>
                                                                <th width="20%">Habitat</th>
                                                                <th width="15%">Jenis</th>
                                                                <th width="25%">Foto</th>
                                                                <th width="15%">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $i=0;
                                                             while($hewan = mysqli_fetch_assoc($query)){
                                                                 $id = "animal_id-".$hewan["animal_id"];
                                                            ?>
                                                                <tr>
                                                                    <th width="5%" scope="row"><?php echo $i+1; ?></th>
                                                                    <td width="20%"><?php echo $hewan['animal_name']; ?></td>
                                                                    <td width="20%"><?php echo $hewan['animal_habitat']; ?></td>
                                                                    <td width="15%"><?php echo $hewan['animal_type']; ?></td>
                                                                    <td width="25%"><img src="<?php echo $hewan['animal_picture']; ?>" style="width: 100%;"></td>
                                                                    <td width="15%">
                                                                        <a href="#" onclick="deletehewan('<?php echo $hewan['animal_id']; ?>');" class="btn btn-danger"><i class="material-icons fa fa-trash"></i></a>
                                                                        <a href="#" onclick="showmenuwithparam('admin','edit_hewan','<?php echo $id; ?>');" class="btn btn-primary"><i class="material-icons fa fa-edit"></i></a>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                                $i++;
                                                             }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Hover table card end -->
                                        
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
    
<script type="text/javascript">
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>