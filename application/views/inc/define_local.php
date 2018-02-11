<?php

if( ! ini_get('date.timezone') )
{
   date_default_timezone_set('GMT');
}

// Start the session
// session_start();

// Don't Touch
// $path_app_folder = dirname(dirname(__FILE__));
// $name_app_folder = basename(dirname(dirname(__FILE__)));
// $_SESSION["PATH_FOLDER_APP"] = $path_app_folder;
// $_SESSION["NAME_FOLDER_APP"] = $name_app_folder;
// $_SESSION["PATH_ADMIN"] = '/'.$_SESSION["NAME_FOLDER_APP"].'/admin';

// Your Choices
define ('TITLE_APP', 'AVICENE Blog');
define ('AUTHOR', 'Vincseize');
define ('COPYRIGHT', '2017-'.date("Y"));
define ('TABLE_FRONTEND', 'articles');
define ('default_max_articles', 10);
define ('default_max_lenght_articles', 350); // letters count

// Bind Conf
define ('HOST', 'localhost');
define ('USER', 'root');
define ('PASSWORD', 'zz161169');
define ('DATABASE', 'avicene');

?>
