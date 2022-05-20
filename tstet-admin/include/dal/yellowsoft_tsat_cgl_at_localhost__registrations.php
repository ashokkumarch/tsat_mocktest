<?php
$dalTableregistrations = array();
$dalTableregistrations["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableregistrations["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTableregistrations["qualification"] = array("type"=>200,"varname"=>"qualification", "name" => "qualification");
$dalTableregistrations["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableregistrations["phone"] = array("type"=>200,"varname"=>"phone", "name" => "phone");
$dalTableregistrations["questions"] = array("type"=>201,"varname"=>"questions", "name" => "questions");
$dalTableregistrations["score"] = array("type"=>3,"varname"=>"score", "name" => "score");
$dalTableregistrations["status"] = array("type"=>3,"varname"=>"status", "name" => "status");
$dalTableregistrations["now"] = array("type"=>135,"varname"=>"now", "name" => "now");
$dalTableregistrations["updated"] = array("type"=>135,"varname"=>"updated", "name" => "updated");
	$dalTableregistrations["id"]["key"]=true;

$dal_info["yellowsoft_tsat_cgl_at_localhost__registrations"] = &$dalTableregistrations;
?>