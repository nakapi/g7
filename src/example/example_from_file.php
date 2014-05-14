<?php
error_reporting(E_ALL ^ E_NOTICE);
define ( 'ROOT', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR );
function __autoload($classname) {
	$namespace = substr ( $classname, 0, strrpos ( $classname, '\\' ) );
	$namespace = str_replace ( '\\', DIRECTORY_SEPARATOR, $classname );
	$classPath = ROOT . str_replace ( '\\', '/', $namespace ) . '.php';
	if (is_readable ( $classPath )) {
		require_once $classPath;
	}
}
if (count ( $argv ) < 2) {
	echo "ERROR:ファイルを指定してください。#php example_from_file.php [HL7ファイル名]";
	return;
}
$content = file_get_contents ( $argv [1] );
// G7 Context
$g7msg = new mg\g7\Context ();
// PARSE
$obj = $g7msg->parse ( $content );
// DUMP
$segments = $obj->getSegments ();
$msgtype= ( $segments['MSH']->getMessageType()[0]->getMessageStructure());

dump ( $segments );
function dump($segments) {
	global $msgtype;
	foreach ( $segments as $key => $segment ) {
		if ($key === "ORDER"||$key==="SPECIMEN") {
			$dumpSegmentFile = "module/dump" . $key . "_".$msgtype.".php";
			$dumpSegmentMethod = "dump" . $key;
		} else {
			$dumpSegmentFile = "module/dump" . $key . ".php";
			$dumpSegmentMethod = "dump" . $key;
		}
		if (file_exists ( $dumpSegmentFile )) {
			require_once ($dumpSegmentFile);
			if (is_array ( $segment )) {
				foreach ( $segment as $key2 => $val ) {
					dump ( $val );
				}
			} else {
				$dumpSegmentMethod ( $segment );
			}
		}
	}
}
