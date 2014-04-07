<?php 
/*
|--------------------------------------------------------------------------
| Chef API configuration
|--------------------------------------------------------------------------
| This file will contain the settings for the chef library.
|
| 'server'  = the URL for the Chef Server
| 'client'  = the name used when authenticating to a Chef Server
| 'key'     = the location of the file which contains the client key
| 'version' = the version of the Chef Server API that is being used
*/

$config["server"] 		= "https://localhost";
$config["client"] 		= "client";
$config["key"] 			= "/etc/chef/client.pem";
$config["version"] 		= "11.4.0";
$config["enterprise"] 	= TRUE;
$config["debug"] 		= FALSE;
