<?php
    session_start();
    session_destroy();
    header('location: http://localhost/hewanlangka/?login=1');
?>