<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function anyanalytics_config() {
    $configarray = array(
    "name" => "Any Analytics",
    "description" => "Allows you to install any analytics software on all cient area pages. I recommend PIWIK.",
    "version" => "1.0",
    "author" => "Alexander Riggs <alex@alexriggs.com>",
    "language" => "english",
    "fields" => array(
    	"clientareacode" => array ("FriendlyName" => "Client Area Tracking Code", "Type" => "textarea", "Rows" => "10", "Cols" => "50", "Description" => "Tracking Code for the client area", "Default" => "", ),
        "adminareacode" => array ("FriendlyName" => "Admin Area Tracking Code", "Type" => "textarea", "Rows" => "10", "Cols" => "50", "Description" => "Tracking Code for the admin area", "Default" => "", )
    ));
    return $configarray;
}

function anyanalytics_activate() {
    # Return Result
    return array('status'=>'success','description'=>'Module was installed. Click configure to place in tracking code.');
    return array('status'=>'error','description'=>'There was an error on activation.');
    return array('status'=>'info','description'=>'You can use the info status return to display a message to the user');

}

function anyanalytics_deactivate() {
    # Return Result
    return array('status'=>'success','description'=>'Any Analytics has been succesfully deactivated.');
    return array('status'=>'error','description'=>'There was an error deactivating Any Analytics');
    return array('status'=>'info','description'=>'If you want to give an info message to a user you can return it here');

}

function anyanalytics_upgrade($vars) {

}

function anyanalytics_output($vars) {

	echo "To configure, go to Setup -> Addon Modules -> Any Analytics -> Cofigure.";

}

function anyanalytics_sidebar($vars) {

}