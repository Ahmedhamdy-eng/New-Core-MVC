<?php
namespace PHPMVC\LIB;

if(!defined('DS') ){
define('DS', DIRECTORY_SEPARATOR);
}



class AutoLoad 
{
	
	public static function autoload($ClassName)
	{	
		#Remove main nameSpace
		

		$ClassName = str_replace('PHPMVC', '' , $ClassName);
		$ClassName = str_replace('\\', '/' , $ClassName);
		$ClassName = strtolower($ClassName);
		$ClassName = $ClassName. '.php';
		if (file_exists(APP_PATH.$ClassName)) {
			require_once APP_PATH.$ClassName;
			}
	}




}

spl_autoload_register(__NAMESPACE__.'\Autoload::autoload');