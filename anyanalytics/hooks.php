<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function anyanalytics_ClientAreaFooterOutput($vars) {
	$sql = "SELECT value FROM `tbladdonmodules` WHERE setting = 'clientareacode' AND module = 'anyanalytics';";
	$sql = mysql_query($sql);
	if(mysql_num_rows($sql) > 0)
	{
		$data = mysql_fetch_assoc($sql);
		$value = html_entity_decode($data["value"]);
	} else {
		$value = '';
	}
    return "<!-- Begin Any Analytics --!>".PHP_EOL.
    		"{$value}".PHP_EOL.
    		"<!-- End Any Analytics --!>".PHP_EOL;
}

add_hook("ClientAreaFooterOutput",1,"anyanalytics_ClientAreaFooterOutput");

function anyanalytics_AdminAreaFooterOutput($vars) {
	$sql = "SELECT value FROM `tbladdonmodules` WHERE setting = 'adminareacode' AND module = 'anyanalytics';";
	$sql = mysql_query($sql);
	if(mysql_num_rows($sql) > 0)
	{
		$data = mysql_fetch_assoc($sql);
		$value = html_entity_decode($data["value"]);
	} else {
		$value = '';
	}
	    return "<!-- Begin Any Analytics --!>".PHP_EOL.
    		"{$value}".PHP_EOL.
    		"<!-- End Any Analytics --!>".PHP_EOL;
}

add_hook("AdminAreaFooterOutput",1,"anyanalytics_AdminAreaFooterOutput");