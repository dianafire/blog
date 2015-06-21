<?php
    /*session_start();
    if(!isset($_SESSION['basket'])){
        $_SESSION['basket'] = array();
    }
    if(!isset($_SESSION['userID'])){
        $_SESSION['userID'] = null;
    }
*/
    require_once (dirname(__FILE__).'/lib/Validate.php');
    require_once (dirname(__FILE__).'/lib/DataBase.php');
    require_once (dirname(__FILE__).'/functions/html.php');
    require_once (dirname(__FILE__).'/pages/Home.php');
    require_once (dirname(__FILE__).'/pages/Categories.php');
    require_once(dirname(__FILE__) . '/pages/User.php');
    require_once(dirname(__FILE__) . '/pages/viewposts.php');
    require_once(dirname(__FILE__) . '/pages/AddRemove.php');
    //$db=DataBase::getDB();
    //$db1=DataBase::getDB();
    $controller=Validate::get('controller','string','Home');
    $action=Validate::get('action','string','index');
    $params=Validate::get('params','string','view');
    if (class_exists($controller)){
        $page=new $controller;
        call_user_func(array($page,$action),$params);
    }
    else {
        echo "Sorry!";
    }