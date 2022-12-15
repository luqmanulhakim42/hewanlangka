<section class="main-container">
<?php
    if($_POST){        
        $layout = $_POST['layout'];
        $page = $_POST['page'];
        include 'views/'.$layout.'/'.$page.'.php';
    } else  {
        include 'views/admin/dashboard.php';
    }
?>
</section>
