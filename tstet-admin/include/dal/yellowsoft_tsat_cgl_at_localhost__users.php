<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTableusers["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["type"] = array("type"=>200,"varname"=>"type", "name" => "type");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["access"] = array("type"=>201,"varname"=>"access", "name" => "access");
$dalTableusers["status"] = array("type"=>3,"varname"=>"status", "name" => "status");
$dalTableusers["now"] = array("type"=>135,"varname"=>"now", "name" => "now");
$dalTableusers["updated"] = array("type"=>135,"varname"=>"updated", "name" => "updated");
	$dalTableusers["id"]["key"]=true;

$dal_info["yellowsoft_tsat_cgl_at_localhost__users"] = &$dalTableusers;
?>