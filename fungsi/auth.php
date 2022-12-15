<?php
    include_once "../config/connection.php";
    session_start();
    class Auth {
        var $conn; 
        public function initClass($connection = null)
        {
            $this->conn = $connection;
            $action = $_POST['action'];
            switch($action){
                case "login":
                    $this->login();
                    break;
            }
        }

        public function login()
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = sprintf("SELECT * FROM tbl_user WHERE user_name = '%s' AND user_password = '%s' AND user_status = 1",$username,$password);
            $query = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($query) > 0){
                $res = mysqli_fetch_assoc($query);
                $_SESSION['isLogin'] = true;
                $_SESSION['userid'] = $res['user_id'];
                $_SESSION['username'] = $res['user_name'];
                $_SESSION['role'] = $res['user_role'];
                header('location: http://localhost/hewanlangka/');
            } else {
                $_SESSION['isLogin'] = false;
                header('location: http://localhost/hewanlangka/?login=1');
            }
        }

    }

    $Auth = new Auth();
    $Auth->initClass($conn);
?>