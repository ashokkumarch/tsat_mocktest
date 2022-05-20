<?php



$tdataquestions = array();
$tdataquestions[".searchableFields"] = array();
$tdataquestions[".ShortName"] = "questions";
$tdataquestions[".OwnerID"] = "";
$tdataquestions[".OriginalTable"] = "questions";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataquestions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataquestions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataquestions[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsquestions = array();
$fieldToolTipsquestions = array();
$pageTitlesquestions = array();
$placeHoldersquestions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsquestions["English"] = array();
	$fieldToolTipsquestions["English"] = array();
	$placeHoldersquestions["English"] = array();
	$pageTitlesquestions["English"] = array();
	$fieldLabelsquestions["English"]["id"] = "Id";
	$fieldToolTipsquestions["English"]["id"] = "";
	$placeHoldersquestions["English"]["id"] = "";
	$fieldLabelsquestions["English"]["question_name"] = "Question Name";
	$fieldToolTipsquestions["English"]["question_name"] = "";
	$placeHoldersquestions["English"]["question_name"] = "";
	$fieldLabelsquestions["English"]["category"] = "Category";
	$fieldToolTipsquestions["English"]["category"] = "";
	$placeHoldersquestions["English"]["category"] = "";
	$fieldLabelsquestions["English"]["question_ans_1"] = "Question Ans 1";
	$fieldToolTipsquestions["English"]["question_ans_1"] = "";
	$placeHoldersquestions["English"]["question_ans_1"] = "";
	$fieldLabelsquestions["English"]["question_ans_2"] = "Question Ans 2";
	$fieldToolTipsquestions["English"]["question_ans_2"] = "";
	$placeHoldersquestions["English"]["question_ans_2"] = "";
	$fieldLabelsquestions["English"]["question_ans_3"] = "Question Ans 3";
	$fieldToolTipsquestions["English"]["question_ans_3"] = "";
	$placeHoldersquestions["English"]["question_ans_3"] = "";
	$fieldLabelsquestions["English"]["question_ans_4"] = "Question Ans 4";
	$fieldToolTipsquestions["English"]["question_ans_4"] = "";
	$placeHoldersquestions["English"]["question_ans_4"] = "";
	$fieldLabelsquestions["English"]["question_correct_ans"] = "Question Correct Ans";
	$fieldToolTipsquestions["English"]["question_correct_ans"] = "";
	$placeHoldersquestions["English"]["question_correct_ans"] = "";
	$fieldLabelsquestions["English"]["status"] = "Status";
	$fieldToolTipsquestions["English"]["status"] = "";
	$placeHoldersquestions["English"]["status"] = "";
	$fieldLabelsquestions["English"]["now"] = "Now";
	$fieldToolTipsquestions["English"]["now"] = "";
	$placeHoldersquestions["English"]["now"] = "";
	$fieldLabelsquestions["English"]["updated"] = "Updated";
	$fieldToolTipsquestions["English"]["updated"] = "";
	$placeHoldersquestions["English"]["updated"] = "";
	if (count($fieldToolTipsquestions["English"]))
		$tdataquestions[".isUseToolTips"] = true;
}


	$tdataquestions[".NCSearch"] = true;



$tdataquestions[".shortTableName"] = "questions";
$tdataquestions[".nSecOptions"] = 0;

$tdataquestions[".mainTableOwnerID"] = "";
$tdataquestions[".entityType"] = 0;

$tdataquestions[".strOriginalTableName"] = "questions";

	



$tdataquestions[".showAddInPopup"] = false;

$tdataquestions[".showEditInPopup"] = false;

$tdataquestions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataquestions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataquestions[".listAjax"] = false;
//	temporary
$tdataquestions[".listAjax"] = false;

	$tdataquestions[".audit"] = false;

	$tdataquestions[".locking"] = false;


$pages = $tdataquestions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataquestions[".edit"] = true;
	$tdataquestions[".afterEditAction"] = 1;
	$tdataquestions[".closePopupAfterEdit"] = 1;
	$tdataquestions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataquestions[".add"] = true;
$tdataquestions[".afterAddAction"] = 1;
$tdataquestions[".closePopupAfterAdd"] = 1;
$tdataquestions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataquestions[".list"] = true;
}



$tdataquestions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataquestions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataquestions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataquestions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataquestions[".printFriendly"] = true;
}



$tdataquestions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataquestions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataquestions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataquestions[".isUseAjaxSuggest"] = true;

$tdataquestions[".rowHighlite"] = true;





$tdataquestions[".ajaxCodeSnippetAdded"] = false;

$tdataquestions[".buttonsAdded"] = false;

$tdataquestions[".addPageEvents"] = false;

// use timepicker for search panel
$tdataquestions[".isUseTimeForSearch"] = false;


$tdataquestions[".badgeColor"] = "6493ea";


$tdataquestions[".allSearchFields"] = array();
$tdataquestions[".filterFields"] = array();
$tdataquestions[".requiredSearchFields"] = array();

$tdataquestions[".googleLikeFields"] = array();
$tdataquestions[".googleLikeFields"][] = "id";
$tdataquestions[".googleLikeFields"][] = "question_name";
$tdataquestions[".googleLikeFields"][] = "category";
$tdataquestions[".googleLikeFields"][] = "question_ans_1";
$tdataquestions[".googleLikeFields"][] = "question_ans_2";
$tdataquestions[".googleLikeFields"][] = "question_ans_3";
$tdataquestions[".googleLikeFields"][] = "question_ans_4";
$tdataquestions[".googleLikeFields"][] = "question_correct_ans";
$tdataquestions[".googleLikeFields"][] = "status";
$tdataquestions[".googleLikeFields"][] = "now";
$tdataquestions[".googleLikeFields"][] = "updated";



$tdataquestions[".tableType"] = "list";

$tdataquestions[".printerPageOrientation"] = 0;
$tdataquestions[".nPrinterPageScale"] = 100;

$tdataquestions[".nPrinterSplitRecords"] = 40;

$tdataquestions[".geocodingEnabled"] = false;










$tdataquestions[".pageSize"] = 20;

$tdataquestions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataquestions[".strOrderBy"] = $tstrOrderBy;

$tdataquestions[".orderindexes"] = array();

$tdataquestions[".sqlHead"] = "SELECT id,  	question_name,  	category,  	question_ans_1,  	question_ans_2,  	question_ans_3,  	question_ans_4,  	question_correct_ans,  	status,  	now,  	updated";
$tdataquestions[".sqlFrom"] = "FROM questions";
$tdataquestions[".sqlWhereExpr"] = "";
$tdataquestions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataquestions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataquestions[".arrGroupsPerPage"] = $arrGPP;

$tdataquestions[".highlightSearchResults"] = true;

$tableKeysquestions = array();
$tableKeysquestions[] = "id";
$tdataquestions[".Keys"] = $tableKeysquestions;


$tdataquestions[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["id"] = $fdata;
		$tdataquestions[".searchableFields"][] = "id";
//	question_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "question_name";
	$fdata["GoodName"] = "question_name";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_name");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "question_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_name"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_name";
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","category");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "category";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["category"] = $fdata;
		$tdataquestions[".searchableFields"][] = "category";
//	question_ans_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "question_ans_1";
	$fdata["GoodName"] = "question_ans_1";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_ans_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "question_ans_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_ans_1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_ans_1"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_ans_1";
//	question_ans_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "question_ans_2";
	$fdata["GoodName"] = "question_ans_2";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_ans_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "question_ans_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_ans_2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_ans_2"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_ans_2";
//	question_ans_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "question_ans_3";
	$fdata["GoodName"] = "question_ans_3";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_ans_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "question_ans_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_ans_3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_ans_3"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_ans_3";
//	question_ans_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "question_ans_4";
	$fdata["GoodName"] = "question_ans_4";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_ans_4");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "question_ans_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_ans_4";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_ans_4"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_ans_4";
//	question_correct_ans
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "question_correct_ans";
	$fdata["GoodName"] = "question_correct_ans";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","question_correct_ans");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "question_correct_ans";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "question_correct_ans";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["question_correct_ans"] = $fdata;
		$tdataquestions[".searchableFields"][] = "question_correct_ans";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","status");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["status"] = $fdata;
		$tdataquestions[".searchableFields"][] = "status";
//	now
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "now";
	$fdata["GoodName"] = "now";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","now");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "now";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "now";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["now"] = $fdata;
		$tdataquestions[".searchableFields"][] = "now";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "questions";
	$fdata["Label"] = GetFieldLabel("questions","updated");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataquestions["updated"] = $fdata;
		$tdataquestions[".searchableFields"][] = "updated";


$tables_data["questions"]=&$tdataquestions;
$field_labels["questions"] = &$fieldLabelsquestions;
$fieldToolTips["questions"] = &$fieldToolTipsquestions;
$placeHolders["questions"] = &$placeHoldersquestions;
$page_titles["questions"] = &$pageTitlesquestions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["questions"] = array();
//	sub_category
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sub_category";
		$detailsParam["dOriginalTable"] = "sub_category";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sub_category";
	$detailsParam["dCaptionTable"] = GetTableCaption("sub_category");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["questions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["questions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["questions"][$dIndex]["masterKeys"][]="category";

				$detailsTablesData["questions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["questions"][$dIndex]["detailKeys"][]="id";

// tables which are master tables for current table (detail)
$masterTablesData["questions"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_questions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	question_name,  	category,  	question_ans_1,  	question_ans_2,  	question_ans_3,  	question_ans_4,  	question_correct_ans,  	status,  	now,  	updated";
$proto0["m_strFrom"] = "FROM questions";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "questions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "question_name",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto8["m_sql"] = "question_name";
$proto8["m_srcTableName"] = "questions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto10["m_sql"] = "category";
$proto10["m_srcTableName"] = "questions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "question_ans_1",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto12["m_sql"] = "question_ans_1";
$proto12["m_srcTableName"] = "questions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "question_ans_2",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto14["m_sql"] = "question_ans_2";
$proto14["m_srcTableName"] = "questions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "question_ans_3",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto16["m_sql"] = "question_ans_3";
$proto16["m_srcTableName"] = "questions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "question_ans_4",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto18["m_sql"] = "question_ans_4";
$proto18["m_srcTableName"] = "questions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "question_correct_ans",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto20["m_sql"] = "question_correct_ans";
$proto20["m_srcTableName"] = "questions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto22["m_sql"] = "status";
$proto22["m_srcTableName"] = "questions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "now",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto24["m_sql"] = "now";
$proto24["m_srcTableName"] = "questions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated",
	"m_strTable" => "questions",
	"m_srcTableName" => "questions"
));

$proto26["m_sql"] = "updated";
$proto26["m_srcTableName"] = "questions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "questions";
$proto29["m_srcTableName"] = "questions";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "question_name";
$proto29["m_columns"][] = "category";
$proto29["m_columns"][] = "question_ans_1";
$proto29["m_columns"][] = "question_ans_2";
$proto29["m_columns"][] = "question_ans_3";
$proto29["m_columns"][] = "question_ans_4";
$proto29["m_columns"][] = "question_correct_ans";
$proto29["m_columns"][] = "status";
$proto29["m_columns"][] = "now";
$proto29["m_columns"][] = "updated";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "questions";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "questions";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="questions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_questions = createSqlQuery_questions();


	
		;

											

$tdataquestions[".sqlquery"] = $queryData_questions;

$tableEvents["questions"] = new eventsBase;
$tdataquestions[".hasEvents"] = false;

?>