<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'category',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'questions',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'users',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'registrations',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'sub_category',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid',
'welcome_item3' => 'grid',
'welcome_item4' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'category',
'linkPage' => 'list',
'linkText' => array( 'table' => 'category',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'fire' ),
'linkComments' => array( 'text' => 'Add and manage questions categoies.',
'type' => 0 ),
'background' => '#6493EA' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'questions',
'linkPage' => 'list',
'linkText' => array( 'table' => 'questions',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'headphones' ),
'linkComments' => array( 'text' => 'Add and manage questions and anwers',
'type' => 0 ),
'background' => '#6493EA' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'users',
'linkPage' => 'list',
'linkText' => array( 'table' => 'users',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'tree-conifer' ),
'linkComments' => array( 'text' => 'Add and manage admin users for this systen',
'type' => 0 ),
'background' => '#6B8E23' ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'registrations',
'linkPage' => 'list',
'linkText' => array( 'table' => 'registrations',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Add and manage registered users data',
'type' => 0 ),
'background' => '#00C2C5' ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'sub_category',
'linkPage' => 'list',
'linkText' => array( 'table' => 'sub_category',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Sub Category description',
'type' => 0 ),
'background' => '#DC143C' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>