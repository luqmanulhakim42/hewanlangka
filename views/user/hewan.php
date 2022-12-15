<?php

  session_start();
  session_destroy();
  $sql = "SELECT * FROM tbl_animal";

	$batas = 12;
  $halaman = isset($_POST['halaman'])?(int)$_POST['halaman'] : 1;
  $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	

  $previous = $halaman - 1;
  $next = $halaman + 1;
  
  $data = mysqli_query($conn,$sql);
  $jumlah_data = mysqli_num_rows($data);
  $total_halaman = ceil($jumlah_data / $batas);

  $nomor = $halaman_awal+1;
  $sql2 ="SELECT * FROM tbl_animal limit $halaman_awal, $batas";
  $query = mysqli_query($conn,$sql2);
?>
<center>
    <div style="margin-top: 100px;">
        <div>
            <h1>HEWAN LANGKA</h1>
        </div>
    </div>

</center>
<div class="container" style="margin: 5%;">
  <div class="row">
    <?php 
    if(mysqli_num_rows($query) > 0){
      while($hewan = mysqli_fetch_assoc($query)){ ?>
      <div class="col-lg-4 col-sm-12" style="padding: 1%;">
        <div class="p-3 border bg-light">
              <div class="card">
                  <?php $id = "id-".$hewan['animal_id']; ?>
                  <img src="<?php echo $hewan['animal_picture']; ?>" class="card-img-top" alt="..." style="height: 200px;object-fit: cover;">
                  <div class="card-body">
                      <h5 class="card-title"><?php echo $hewan['animal_name']; ?></h5>
                      <p class="card-title">Created Date : <?php echo $hewan['animal_createdts']; ?></p>
                      <p class="card-text"><?php echo substr($hewan['animal_characteristic'],0,100); ?> ...</p>
                      <a href="#" onclick="showmenuwithparam('user','detail_hewan','<?php echo $id; ?>')" class="btn btn-primary">Details</a>
                  </div>
              </div>
        </div>
      </div>
      <?php } 
    } else { ?>
      <div class="col-lg-12 col-sm-12" style="padding: 2%; margin-bottom: 60px;">
        <center>
            <p>Data Kosong</p>
        </center>
      </div>
    <?php }
    ?>
		<nav>
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ $prev = "halaman-".$previous; echo " href=\"#\"  onclick=\"showmenuwithparam('user','kegiatan','".$prev."')\" "; } ?> >Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item"><a href="#" class="page-link" <?php $page = "halaman-".$x; ?> onclick="showmenuwithparam('user','kegiatan','<?php echo $page; ?>')" ><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a class="page-link" <?php if($halaman < $total_halaman) { $nex = "halaman-".$next;  echo " href=\"#\" onclick=\"showmenuwithparam('user','kegiatan','".$nex."')\" "; } ?> >Next</a>
				</li>
			</ul>
		</nav>
  </div>
</div>