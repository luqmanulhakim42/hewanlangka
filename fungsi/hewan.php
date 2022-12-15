<?php
    include "../config/connection.php";
    session_start();

    class hewan {
        var $conn; 
        public function initClass($connection = null)
        {
            $this->conn = $connection;
            $action = $_POST['action'];
            switch($action){
                case "add":
                    $this->addhewan();
                    break;
                case "update":
                    $this->updatehewan();
                    break;
                case "delete":
                    $this->deletehewan();
                    break;
            };
        }

        public function addhewan()
        {
            $result = array( "status" => false, "message" => "" );
            $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
			$namafoto = $_FILES['fotohewan']['name'];
			$x = explode('.', $namafoto);
			$ekstensi = strtolower(end($x));
            $basename = basename($namafoto, $ekstensi);
			$ukuran	= $_FILES['fotohewan']['size'];
			$file_tmp = $_FILES['fotohewan']['tmp_name'];	
            
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 15000000){			
					move_uploaded_file($file_tmp, '../includes/images/hewan/'.$basename."_".time().".".$ekstensi);

                    $nama = $_POST['nama'];
                    $habitat = $_POST['habitat'];
                    $ciri = $_POST['ciri'];
                    $karakteristik = $_POST['karakteristik'];
                    $jenis = $_POST['jenis'];
                    $makanan = $_POST['makanan'];
                    $path = "http://localhost/hewanlangka/includes/images/hewan/".$basename."_".time().".".$ekstensi;
                    $createdby = $_SESSION['userid'];
                    $sql = "INSERT INTO tbl_animal (animal_name, animal_habitat, animal_feature, animal_characteristic, animal_type, animal_food, animal_picture, animal_createdby) VALUES ('$nama', '$habitat', '$ciri', '$karakteristik', '$jenis', '$makanan', '$path', '$createdby')";

                    $query = mysqli_query($this->conn, $sql);
					if($query){
                        $result = array( "status" => true, "message" => "Berhasil Menyimpan Hewan" );
					}else{
			            $result = array( "status" => false, "message" => "Gagal Menyimpan Hewan" );
					}
				}else{
                    $result = array( "status" => false, "message" => "Ukuran Foto Terlalu Besar, Maksimal 15 Mb" );
				}
			}else{
                $result = array( "status" => false, "message" => "Ekstensi Foto Yang diupload Tidak diperbolehkan, Foto hanya bisa (JPG, JPEG, PNG)" );
			}

            echo json_encode($result);
        }

        public function updatehewan()
        {
            $result = array( "status" => false, "message" => "" );
            if(isset($_FILES['fotohewan'])){                
                $ekstensi_diperbolehkan	= array('png','jpg','jpeg');
                $namafoto = $_FILES['fotohewan']['name'];
                $x = explode('.', $namafoto);
                $ekstensi = strtolower(end($x));
                $basename = basename($namafoto, $ekstensi);
                $ukuran	= $_FILES['fotohewan']['size'];
                $file_tmp = $_FILES['fotohewan']['tmp_name'];	
                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                    if($ukuran < 15000000){			
                        move_uploaded_file($file_tmp, '../includes/images/hewan/'.$basename."_".time().".".$ekstensi);

                        $id = $_POST['id'];
                        $nama = $_POST['nama'];
                        $habitat = $_POST['habitat'];
                        $ciri = $_POST['ciri'];
                        $karakteristik = $_POST['karakteristik'];
                        $jenis = $_POST['jenis'];
                        $makanan = $_POST['makanan'];
                        $path = "http://localhost/hewanlangka/includes/images/hewan/".$basename."_".time().".".$ekstensi;
                        $sql = "UPDATE tbl_animal SET animal_name = '$nama', animal_habitat = '$habitat', animal_feature = '$ciri', animal_characteristic = '$karakteristik', animal_type = '$jenis', animal_food = '$makanan', animal_picture = '$path' WHERE animal_id = '$id'";
                        $query = mysqli_query($this->conn, $sql);
                        if($query){
                            $result = array( "status" => true, "message" => "Berhasil Menyimpan Hewan" );
                        }else{
    			            $result = array( "status" => false, "message" => "Gagal Menyimpan Hewan" );
                        }
                    }else{
                        $result = array( "status" => false, "message" => "Ukuran Foto Terlalu Besar, Maksimal 15 Mb" );
				    }
                }else{
                    $result = array( "status" => false, "message" => "Ekstensi Foto Yang diupload Tidak diperbolehkan, Foto hanya bisa (JPG, JPEG, PNG)" );
			    }
            } else {
                $id = $_POST['id'];
                $nama = $_POST['nama'];
                $habitat = $_POST['habitat'];
                $ciri = $_POST['ciri'];
                $karakteristik = $_POST['karakteristik'];
                $jenis = $_POST['jenis'];
                $makanan = $_POST['makanan'];
                $sql = "UPDATE tbl_animal SET animal_name = '$nama', animal_habitat = '$habitat', animal_feature = '$ciri', animal_characteristic = '$karakteristik', animal_type = '$jenis', animal_food = '$makanan' WHERE animal_id = '$id'";
                $query = mysqli_query($this->conn, $sql);
                if($query){
                    $result = array( "status" => true, "message" => "Berhasil Menyimpan Hewan" );
                }else{
                    $result = array( "status" => false, "message" => "Gagal Menyimpan Hewan" );
				}
            }

            echo json_encode($result);
			
        }

        public function deletehewan()
        {
            $result = array( "status" => false, "message" => "" );
            $id = $_POST['id'];
            $detail_hewan = $this->getdetailhewan($id);
            $sql = "DELETE FROM tbl_animal WHERE animal_id = '$id'";
            $query = mysqli_query($this->conn, $sql);
            if($query){
                $result = array( "status" => true, "message" => "Berhasil Menghapus Hewan" );
                unlink("../includes/images/hewan/".basename($detail_hewan['animal_picture']));
            }else{
                $result = array( "status" => false, "message" => "Gagal Menghapus Hewan" );
            }

            echo json_encode($result);
			
        }

        public function getdetailhewan($id = null)
        {
            $sql = "SELECT * FROM tbl_animal a WHERE a.animal_id = '$id'";
            $query = mysqli_query($this->conn, $sql);
            $row = mysqli_fetch_assoc($query);
            return $row;
        }
    }


    $hewan = new hewan();
    $hewan->initClass($conn);
?>