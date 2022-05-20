<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["category"] ) ) {
			$lookupTableLinks["category"] = array();
		}
		if( !isset( $lookupTableLinks["category"]["questions.category"] )) {
			$lookupTableLinks["category"]["questions.category"] = array();
		}
		$lookupTableLinks["category"]["questions.category"]["edit"] = array("table" => "questions", "field" => "category", "page" => "edit");
		if( !isset( $lookupTableLinks["category"] ) ) {
			$lookupTableLinks["category"] = array();
		}
		if( !isset( $lookupTableLinks["category"]["sub_category.parent_category"] )) {
			$lookupTableLinks["category"]["sub_category.parent_category"] = array();
		}
		$lookupTableLinks["category"]["sub_category.parent_category"]["edit"] = array("table" => "sub_category", "field" => "parent_category", "page" => "edit");
}

?>