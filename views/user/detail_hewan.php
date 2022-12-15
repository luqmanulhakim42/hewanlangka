<?php
    $id = $_POST["id"];
    $sql = "SELECT * FROM tbl_animal WHERE animal_id = '$id'";
    $query = mysqli_query($conn, $sql);
    $hewan = mysqli_fetch_assoc($query);
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12" style="padding: 1%;">
      <div class="p-3 border bg-light">
            <div class="card">
                <?php $id = "id-".$hewan['animal_id']; ?>
                <img src="<?php echo $hewan['animal_picture']; ?>" class="card-img-top" alt="..." style="height: 100%;object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $hewan['animal_name']; ?></h4>
                    <p class="card-title"><b>Jenis :</b> <?php echo $hewan['animal_type']; ?></p>
                    <p class="card-title"><b>Habitat :</b> <?php echo $hewan['animal_habitat']; ?></p>
                    <p class="card-title"><b>Makanan :</b> <?php echo $hewan['animal_food']; ?></p>
                    <p class="card-title"><b>Created Date :</b> <?php echo $hewan['animal_createdts']; ?></p>
                    <p class="card-text"><b>Karakteristik :</b> <br><?php echo $hewan['animal_characteristic']; ?></p>
                    <p class="card-text"><b>Ciri-Ciri :</b> <br><?php echo $hewan['animal_feature']; ?></p>
                    <div class="row">
                      <div class="col-11"></div>
                      <div class="col-1">
                        <center>
                          <a href="#" onclick="showmenu('user', 'hewan');" class="btn btn-danger">Back</a>
                        </center>
                      </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</div>