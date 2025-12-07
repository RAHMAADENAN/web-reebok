<?php

    $page = isset($_GET['page']) ? $_GET['page'] : 'index';
        if($page == 'index') include "page/index.php";
        else if ($page == 'shopall') include "page/shopall.php";
        
 ?>