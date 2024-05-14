<?php

if(!array_key_exists('PATH_INFO', $_SERVER)||$_SERVER['PATH_INFO']==='/'){
    require_once 'main.php';
} else if($_SERVER['PATH_INFO']==='/new-product'){
    if($_SERVER['REQUEST_METHOD']==='GET'){
        require_once 'form-product.php';
    } else if($_SERVER['REQUEST_METHOD']==='POST'){
        require_once 'new-product.php';
    }
} else if($_SERVER['PATH_INFO']==='/update-product'){
    if($_SERVER['REQUEST_METHOD']==='GET'){
        require_once 'form-product.php';
    } else if($_SERVER['REQUEST_METHOD']==='POST'){
        require_once 'update-product.php';
    }
} else if($_SERVER['PATH_INFO']==='/delete-product'){
    require_once 'delete-product.php';
} else if($_SERVER['PATH_INFO']==='/admin'){
    require_once 'admin.php';
}