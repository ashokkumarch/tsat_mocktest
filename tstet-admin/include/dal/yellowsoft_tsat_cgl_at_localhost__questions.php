<?php
$dalTablequestions = array();
$dalTablequestions["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablequestions["question_name"] = array("type"=>201,"varname"=>"question_name", "name" => "question_name");
$dalTablequestions["category"] = array("type"=>3,"varname"=>"category", "name" => "category");
$dalTablequestions["question_ans_1"] = array("type"=>201,"varname"=>"question_ans_1", "name" => "question_ans_1");
$dalTablequestions["question_ans_2"] = array("type"=>201,"varname"=>"question_ans_2", "name" => "question_ans_2");
$dalTablequestions["question_ans_3"] = array("type"=>201,"varname"=>"question_ans_3", "name" => "question_ans_3");
$dalTablequestions["question_ans_4"] = array("type"=>201,"varname"=>"question_ans_4", "name" => "question_ans_4");
$dalTablequestions["question_correct_ans"] = array("type"=>16,"varname"=>"question_correct_ans", "name" => "question_correct_ans");
$dalTablequestions["status"] = array("type"=>3,"varname"=>"status", "name" => "status");
$dalTablequestions["now"] = array("type"=>135,"varname"=>"now", "name" => "now");
$dalTablequestions["updated"] = array("type"=>135,"varname"=>"updated", "name" => "updated");
	$dalTablequestions["id"]["key"]=true;

$dal_info["yellowsoft_tsat_cgl_at_localhost__questions"] = &$dalTablequestions;
?>