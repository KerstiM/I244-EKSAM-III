<?php
require_once("func.php");
connect_db();
session_start();

$mode="";
if (!empty($_GET['page'])){
	$mode=$_GET['page'];
}

switch($mode){
	case "lisa":
		lisa_hinne();
	break;
	case "post":
		kuva_hinne();
	break;
	default:
		include("pealeht.html");
	break;
}
?>
