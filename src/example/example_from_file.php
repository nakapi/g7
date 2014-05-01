<?php
require_once 'module/dumpAL1.php';
require_once 'module/dumpDB1.php';
require_once 'module/dumpEVN.php';
require_once 'module/dumpIN1.php';
require_once 'module/dumpMSH.php';
require_once 'module/dumpNK1.php';
require_once 'module/dumpOBX.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPV1.php';
require_once 'module/dumpPV2.php';
define ( 'ROOT', __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR );
function __autoload($classname) {
	$namespace = substr ( $classname, 0, strrpos ( $classname, '\\' ) );
	$namespace = str_replace ( '\\', DIRECTORY_SEPARATOR, $classname );
	$classPath = ROOT . str_replace ( '\\', '/', $namespace ) . '.php';
	if (is_readable ( $classPath )) {
		require_once $classPath;
	}
}
if( count($argv)< 2){
	echo "ERROR:ファイルを指定してください。#php example_from_file.php [HL7ファイル名]";
	return ;
}
$content = file_get_contents($argv[1]);
// G7 Context
$g7msg = new mg\g7\Context ();
// PARSE
$obj = $g7msg->parse ( $content );
// DUMP
var_dump($obj);