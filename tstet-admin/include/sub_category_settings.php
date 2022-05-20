<?php



$tdatasub_category = array();
$tdatasub_category[".searchableFields"] = array();
$tdatasub_category[".ShortName"] = "sub_category";
$tdatasub_category[".OwnerID"] = "";
$tdatasub_category[".OriginalTable"] = "sub_category";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasub_category[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasub_category[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasub_category[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssub_category = array();
$fieldToolTipssub_category = array();
$pageTitlessub_category = array();
$placeHolderssub_category = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssub_category["English"] = array();
	$fieldToolTipssub_category["English"] = array();
	$placeHolderssub_category["English"] = array();
	$pageTitlessub_category["English"] = array();
	$fieldLabelssub_category["English"]["id"] = "Id";
	$fieldToolTipssub_category["English"]["id"] = "";
	$placeHolderssub_category["English"]["id"] = "";
	$fieldLabelssub_category["English"]["title"] = "Title";
	$fieldToolTipssub_category["English"]["title"] = "";
	$placeHolderssub_category["English"]["title"] = "";
	$fieldLabelssub_category["English"]["status"] = "Status";
	$fieldToolTipssub_category["English"]["status"] = "";
	$placeHolderssub_category["English"]["status"] = "";
	$fieldLabelssub_category["English"]["create_date"] = "Create Date";
	$fieldToolTipssub_category["English"]["create_date"] = "";
	$placeHolderssub_category["English"]["create_date"] = "";
	$fieldLabelssub_category["English"]["last_update"] = "Last Update";
	$fieldToolTipssub_category["English"]["last_update"] = "";
	$placeHolderssub_category["English"]["last_update"] = "";
	$fieldLabelssub_category["English"]["parent_category"] = "Parent Category";
	$fieldToolTipssub_category["English"]["parent_category"] = "";
	$placeHolderssub_category["English"]["parent_category"] = "";
	if (count($fieldToolTipssub_category["English"]))
		$tdatasub_category[".isUseToolTips"] = true;
}


	$tdatasub_category[".NCSearch"] = true;



$tdatasub_category[".shortTableName"] = "sub_category";
$tdatasub_category[".nSecOptions"] = 0;

$tdatasub_category[".mainTableOwnerID"] = "";
$tdatasub_category[".entityType"] = 0;

$tdatasub_category[".strOriginalTableName"] = "sub_category";

	



$tdatasub_category[".showAddInPopup"] = false;

$tdatasub_category[".showEditInPopup"] = false;

$tdatasub_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasub_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasub_category[".listAjax"] = false;
//	temporary
$tdatasub_category[".listAjax"] = false;

	$tdatasub_category[".audit"] = false;

	$tdatasub_category[".locking"] = false;


$pages = $tdatasub_category[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasub_category[".edit"] = true;
	$tdatasub_category[".afterEditAction"] = 1;
	$tdatasub_category[".closePopupAfterEdit"] = 1;
	$tdatasub_category[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasub_category[".add"] = true;
$tdatasub_category[".afterAddAction"] = 1;
$tdatasub_category[".closePopupAfterAdd"] = 1;
$tdatasub_category[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasub_category[".list"] = true;
}



$tdatasub_category[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasub_category[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasub_category[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasub_category[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasub_category[".printFriendly"] = true;
}



$tdatasub_category[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasub_category[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasub_category[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasub_category[".isUseAjaxSuggest"] = true;

$tdatasub_category[".rowHighlite"] = true;





$tdatasub_category[".ajaxCodeSnippetAdded"] = false;

$tdatasub_category[".buttonsAdded"] = false;

$tdatasub_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasub_category[".isUseTimeForSearch"] = false;


$tdatasub_category[".badgeColor"] = "6493ea";


$tdatasub_category[".allSearchFields"] = array();
$tdatasub_category[".filterFields"] = array();
$tdatasub_category[".requiredSearchFields"] = array();

$tdatasub_category[".googleLikeFields"] = array();
$tdatasub_category[".googleLikeFields"][] = "id";
$tdatasub_category[".googleLikeFields"][] = "title";
$tdatasub_category[".googleLikeFields"][] = "status";
$tdatasub_category[".googleLikeFields"][] = "create_date";
$tdatasub_category[".googleLikeFields"][] = "last_update";
$tdatasub_category[".googleLikeFields"][] = "parent_category";



$tdatasub_category[".tableType"] = "list";

$tdatasub_category[".printerPageOrientation"] = 0;
$tdatasub_category[".nPrinterPageScale"] = 100;

$tdatasub_category[".nPrinterSplitRecords"] = 40;

$tdatasub_category[".geocodingEnabled"] = false;










$tdatasub_category[".pageSize"] = 20;

$tdatasub_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasub_category[".strOrderBy"] = $tstrOrderBy;

$tdatasub_category[".orderindexes"] = array();

$tdatasub_category[".sqlHead"] = "SELECT id,  	title,  	status,  	create_date,  	last_update,  	parent_category";
$tdatasub_category[".sqlFrom"] = "FROM sub_category";
$tdatasub_category[".sqlWhereExpr"] = "";
$tdatasub_category[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasub_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasub_category[".arrGroupsPerPage"] = $arrGPP;

$tdatasub_category[".highlightSearchResults"] = true;

$tableKeyssub_category = array();
$tableKeyssub_category[] = "id";
$tdatasub_category[".Keys"] = $tableKeyssub_category;


$tdatasub_category[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","id");
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


	$tdatasub_category["id"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatasub_category["title"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "title";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","status");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatasub_category["status"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "status";
//	create_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_date";
	$fdata["GoodName"] = "create_date";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","create_date");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "create_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_date";

	
	
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

	
	
		$edata["DateEditType"] = 0;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatasub_category["create_date"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "create_date";
//	last_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_update";
	$fdata["GoodName"] = "last_update";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","last_update");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "last_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update";

	
	
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

	
	
		$edata["DateEditType"] = 0;
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


	$tdatasub_category["last_update"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "last_update";
//	parent_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parent_category";
	$fdata["GoodName"] = "parent_category";
	$fdata["ownerTable"] = "sub_category";
	$fdata["Label"] = GetFieldLabel("sub_category","parent_category");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "parent_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "parent_category";

	
	
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

	

	
	$edata["LookupOrderBy"] = "title";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatasub_category["parent_category"] = $fdata;
		$tdatasub_category[".searchableFields"][] = "parent_category";


$tables_data["sub_category"]=&$tdatasub_category;
$field_labels["sub_category"] = &$fieldLabelssub_category;
$fieldToolTips["sub_category"] = &$fieldToolTipssub_category;
$placeHolders["sub_category"] = &$placeHolderssub_category;
$page_titles["sub_category"] = &$pageTitlessub_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sub_category"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sub_category"] = array();



	
				$strOriginalDetailsTable="questions";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="questions";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "questions";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sub_category"][0] = $masterParams;
				$masterTablesData["sub_category"][0]["masterKeys"] = array();
	$masterTablesData["sub_category"][0]["masterKeys"][]="category";
				$masterTablesData["sub_category"][0]["detailKeys"] = array();
	$masterTablesData["sub_category"][0]["detailKeys"][]="id";
		
	
				$strOriginalDetailsTable="category";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="category";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "category";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["sub_category"][1] = $masterParams;
				$masterTablesData["sub_category"][1]["masterKeys"] = array();
	$masterTablesData["sub_category"][1]["masterKeys"][]="id";
				$masterTablesData["sub_category"][1]["detailKeys"] = array();
	$masterTablesData["sub_category"][1]["detailKeys"][]="parent_category";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_sub_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	status,  	create_date,  	last_update,  	parent_category";
$proto0["m_strFrom"] = "FROM sub_category";
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
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sub_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "sub_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "sub_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_date",
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto12["m_sql"] = "create_date";
$proto12["m_srcTableName"] = "sub_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update",
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto14["m_sql"] = "last_update";
$proto14["m_srcTableName"] = "sub_category";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_category",
	"m_strTable" => "sub_category",
	"m_srcTableName" => "sub_category"
));

$proto16["m_sql"] = "parent_category";
$proto16["m_srcTableName"] = "sub_category";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "sub_category";
$proto19["m_srcTableName"] = "sub_category";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "title";
$proto19["m_columns"][] = "status";
$proto19["m_columns"][] = "create_date";
$proto19["m_columns"][] = "last_update";
$proto19["m_columns"][] = "parent_category";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "sub_category";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "sub_category";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sub_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sub_category = createSqlQuery_sub_category();


	
		;

						

$tdatasub_category[".sqlquery"] = $queryData_sub_category;

$tableEvents["sub_category"] = new eventsBase;
$tdatasub_category[".hasEvents"] = false;

?>