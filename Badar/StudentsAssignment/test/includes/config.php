<?php
/**
 * Created by PhpStorm.
 * User: Rolustech
 * Date: 7/22/2016
 * Time: 3:25 PM
 */


global $db,$page,$action;

require_once('functions.php');
require_once('Db_Connection.php');

//echo 1 or die;


$db = DB::getInstance();
//$connection = $db->connection_generated();

$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';

$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';
//echo $action;
if(!empty($action)){
    $action();
}

