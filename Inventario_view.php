<?php
// This script and data application were generated by AppGini 5.84
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/Inventario.php");
	include("$currDir/Inventario_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('Inventario');
	if(!$perm[0]) {
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "Inventario";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(
		"`Inventario`.`id`" => "id",
		"`Inventario`.`Empleado`" => "Empleado",
		"`Inventario`.`Marca`" => "Marca",
		"`Inventario`.`Modelo`" => "Modelo",
		"`Inventario`.`Serie`" => "Serie",
		"`Inventario`.`Hedset`" => "Hedset",
		"`Inventario`.`Monitor`" => "Monitor",
		"`Inventario`.`campo1`" => "campo1",
		"`Inventario`.`campo2`" => "campo2",
		"`Inventario`.`NombreComp`" => "NombreComp",
		"`Inventario`.`Antivirus`" => "Antivirus",
		"`Inventario`.`TeamviewerID`" => "TeamviewerID",
		"`Inventario`.`Notas`" => "Notas",
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(
		1 => '`Inventario`.`id`',
		2 => 2,
		3 => 3,
		4 => 4,
		5 => 5,
		6 => 6,
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
		11 => 11,
		12 => '`Inventario`.`TeamviewerID`',
		13 => 13,
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(
		"`Inventario`.`id`" => "id",
		"`Inventario`.`Empleado`" => "Empleado",
		"`Inventario`.`Marca`" => "Marca",
		"`Inventario`.`Modelo`" => "Modelo",
		"`Inventario`.`Serie`" => "Serie",
		"`Inventario`.`Hedset`" => "Hedset",
		"`Inventario`.`Monitor`" => "Monitor",
		"`Inventario`.`campo1`" => "campo1",
		"`Inventario`.`campo2`" => "campo2",
		"`Inventario`.`NombreComp`" => "NombreComp",
		"`Inventario`.`Antivirus`" => "Antivirus",
		"`Inventario`.`TeamviewerID`" => "TeamviewerID",
		"`Inventario`.`Notas`" => "Notas",
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(
		"`Inventario`.`id`" => "ID",
		"`Inventario`.`Empleado`" => "Empleado",
		"`Inventario`.`Marca`" => "Comp. Marca",
		"`Inventario`.`Modelo`" => "Comp. Modelo",
		"`Inventario`.`Serie`" => "Num. Serie",
		"`Inventario`.`Hedset`" => "Headset",
		"`Inventario`.`Monitor`" => "Monitor Externo",
		"`Inventario`.`campo1`" => "Campo 1",
		"`Inventario`.`campo2`" => "Campo 2",
		"`Inventario`.`NombreComp`" => "Nombre Comp.",
		"`Inventario`.`Antivirus`" => "Antivirus",
		"`Inventario`.`TeamviewerID`" => "Teamviewer ID",
		"`Inventario`.`Notas`" => "Notas",
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(
		"`Inventario`.`id`" => "id",
		"`Inventario`.`Empleado`" => "Empleado",
		"`Inventario`.`Marca`" => "Marca",
		"`Inventario`.`Modelo`" => "Modelo",
		"`Inventario`.`Serie`" => "Serie",
		"`Inventario`.`Hedset`" => "Hedset",
		"`Inventario`.`Monitor`" => "Monitor",
		"`Inventario`.`campo1`" => "campo1",
		"`Inventario`.`campo2`" => "campo2",
		"`Inventario`.`NombreComp`" => "NombreComp",
		"`Inventario`.`Antivirus`" => "Antivirus",
		"`Inventario`.`TeamviewerID`" => "TeamviewerID",
		"`Inventario`.`Notas`" => "Notas",
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`Inventario` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = true;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 0;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "Inventario_view.php";
	$x->RedirectAfterInsert = "Inventario_view.php";
	$x->TableTitle = "Computadoras";
	$x->TableIcon = "resources/table_icons/laptop.png";
	$x->PrimaryKey = "`Inventario`.`id`";
	$x->DefaultSortField = '2';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150, 150);
	$x->ColCaption = array("Empleado", "Comp. Marca", "Comp. Modelo", "Num. Serie", "Headset", "Monitor Externo", "Campo 1", "Campo 2", "Nombre Comp.", "Antivirus", "Teamviewer ID", "Notas");
	$x->ColFieldName = array('Empleado', 'Marca', 'Modelo', 'Serie', 'Hedset', 'Monitor', 'campo1', 'campo2', 'NombreComp', 'Antivirus', 'TeamviewerID', 'Notas');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);

	// template paths below are based on the app main directory
	$x->Template = 'templates/Inventario_templateTV.html';
	$x->SelectedTemplate = 'templates/Inventario_templateTVS.html';
	$x->TemplateDV = 'templates/Inventario_templateDV.html';
	$x->TemplateDVP = 'templates/Inventario_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';
	$x->HasCalculatedFields = false;

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))) { $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])) { // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Inventario`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Inventario' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `Inventario`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='Inventario' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3) { // view all
		// no further action
	}elseif($perm[2]==0) { // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`Inventario`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: Inventario_init
	$render=TRUE;
	if(function_exists('Inventario_init')) {
		$args=array();
		$render=Inventario_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: Inventario_header
	$headerCode='';
	if(function_exists('Inventario_header')) {
		$args=array();
		$headerCode=Inventario_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode) {
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: Inventario_footer
	$footerCode='';
	if(function_exists('Inventario_footer')) {
		$args=array();
		$footerCode=Inventario_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode) {
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>