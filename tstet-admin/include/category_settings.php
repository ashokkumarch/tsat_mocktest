<?php



$tdatacategory = array();
$tdatacategory[".searchableFields"] = array();
$tdatacategory[".ShortName"] = "category";
$tdatacategory[".OwnerID"] = "";
$tdatacategory[".OriginalTable"] = "category";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatacategory[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacategory[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacategory[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelscategory = array();
$fieldToolTipscategory = array();
$pageTitlescategory = array();
$placeHolderscategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscategory["English"] = array();
	$fieldToolTipscategory["English"] = array();
	$placeHolderscategory["English"] = array();
	$pageTitlescategory["English"] = array();
	$fieldLabelscategory["English"]["id"] = "Id";
	$fieldToolTipscategory["English"]["id"] = "";
	$placeHolderscategory["English"]["id"] = "";
	$fieldLabelscategory["English"]["title"] = "Title";
	$fieldToolTipscategory["English"]["title"] = "";
	$placeHolderscategory["English"]["title"] = "";
	$fieldLabelscategory["English"]["status"] = "Status";
	$fieldToolTipscategory["English"]["status"] = "";
	$placeHolderscategory["English"]["status"] = "";
	$fieldLabelscategory["English"]["now"] = "Now";
	$fieldToolTipscategory["English"]["now"] = "";
	$placeHolderscategory["English"]["now"] = "";
	$fieldLabelscategory["English"]["updated"] = "Updated";
	$fieldToolTipscategory["English"]["updated"] = "";
	$placeHolderscategory["English"]["updated"] = "";
	if (count($fieldToolTipscategory["English"]))
		$tdatacategory[".isUseToolTips"] = true;
}


	$tdatacategory[".NCSearch"] = true;



$tdatacategory[".shortTableName"] = "category";
$tdatacategory[".nSecOptions"] = 0;

$tdatacategory[".mainTableOwnerID"] = "";
$tdatacategory[".entityType"] = 0;

$tdatacategory[".strOriginalTableName"] = "category";

	



$tdatacategory[".showAddInPopup"] = false;

$tdatacategory[".showEditInPopup"] = false;

$tdatacategory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategory[".listAjax"] = false;
//	temporary
$tdatacategory[".listAjax"] = false;

	$tdatacategory[".audit"] = false;

	$tdatacategory[".locking"] = false;


$pages = $tdatacategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategory[".edit"] = true;
	$tdatacategory[".afterEditAction"] = 1;
	$tdatacategory[".closePopupAfterEdit"] = 1;
	$tdatacategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategory[".add"] = true;
$tdatacategory[".afterAddAction"] = 1;
$tdatacategory[".closePopupAfterAdd"] = 1;
$tdatacategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategory[".list"] = true;
}



$tdatacategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategory[".printFriendly"] = true;
}



$tdatacategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategory[".isUseAjaxSuggest"] = true;

$tdatacategory[".rowHighlite"] = true;





$tdatacategory[".ajaxCodeSnippetAdded"] = false;

$tdatacategory[".buttonsAdded"] = false;

$tdatacategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategory[".isUseTimeForSearch"] = false;


$tdatacategory[".badgeColor"] = "6493ea";


$tdatacategory[".allSearchFields"] = array();
$tdatacategory[".filterFields"] = array();
$tdatacategory[".requiredSearchFields"] = array();

$tdatacategory[".googleLikeFields"] = array();
$tdatacategory[".googleLikeFields"][] = "id";
$tdatacategory[".googleLikeFields"][] = "title";
$tdatacategory[".googleLikeFields"][] = "status";
$tdatacategory[".googleLikeFields"][] = "now";
$tdatacategory[".googleLikeFields"][] = "updated";



$tdatacategory[".tableType"] = "list";

$tdatacategory[".printerPageOrientation"] = 0;
$tdatacategory[".nPrinterPageScale"] = 100;

$tdatacategory[".nPrinterSplitRecords"] = 40;

$tdatacategory[".geocodingEnabled"] = false;










$tdatacategory[".pageSize"] = 20;

$tdatacategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategory[".strOrderBy"] = $tstrOrderBy;

$tdatacategory[".orderindexes"] = array();

$tdatacategory[".sqlHead"] = "SELECT id,  	title,  	status,  	now,  	updated";
$tdatacategory[".sqlFrom"] = "FROM category";
$tdatacategory[".sqlWhereExpr"] = "";
$tdatacategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategory[".arrGroupsPerPage"] = $arrGPP;

$tdatacategory[".highlightSearchResults"] = true;

$tableKeyscategory = array();
$tableKeyscategory[] = "id";
$tdatacategory[".Keys"] = $tableKeyscategory;


$tdatacategory[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = GetFieldLabel("category","id");
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


	$tdatacategory["id"] = $fdata;
		$tdatacategory[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = GetFieldLabel("category","title");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacategory["title"] = $fdata;
		$tdatacategory[".searchableFields"][] = "title";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = GetFieldLabel("category","status");
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


	$tdatacategory["status"] = $fdata;
		$tdatacategory[".searchableFields"][] = "status";
//	now
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "now";
	$fdata["GoodName"] = "now";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = GetFieldLabel("category","now");
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


	$tdatacategory["now"] = $fdata;
		$tdatacategory[".searchableFields"][] = "now";
//	updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated";
	$fdata["GoodName"] = "updated";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = GetFieldLabel("category","updated");
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


	$tdatacategory["updated"] = $fdata;
		$tdatacategory[".searchableFields"][] = "updated";


$tables_data["category"]=&$tdatacategory;
$field_labels["category"] = &$fieldLabelscategory;
$fieldToolTips["category"] = &$fieldToolTipscategory;
$placeHolders["category"] = &$placeHolderscategory;
$page_titles["category"] = &$pageTitlescategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["category"] = array();
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


		
	$detailsTablesData["category"][$dIndex] = $detailsParam;

	
		$detailsTablesData["category"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["category"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["category"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["category"][$dIndex]["detailKeys"][]="parent_category";

// tables which are master tables for current table (detail)
$masterTablesData["category"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	status,  	now,  	updated";
$proto0["m_strFrom"] = "FROM category";
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
	"m_strTable" => "category",
	"m_srcTableName" => "category"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "category",
	"m_srcTableName" => "category"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "category",
	"m_srcTableName" => "category"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "now",
	"m_strTable" => "category",
	"m_srcTableName" => "category"
));

$proto12["m_sql"] = "now";
$proto12["m_srcTableName"] = "category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated",
	"m_strTable" => "category",
	"m_srcTableName" => "category"
));

$proto14["m_sql"] = "updated";
$proto14["m_srcTableName"] = "category";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "category";
$proto17["m_srcTableName"] = "category";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "title";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "now";
$proto17["m_columns"][] = "updated";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "category";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "category";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_category = createSqlQuery_category();


	
		;

					

$tdatacategory[".sqlquery"] = $queryData_category;

$tableEvents["category"] = new eventsBase;
$tdatacategory[".hasEvents"] = false;

?>