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
define ( 'ROOT', __DIR__ . DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR );
function __autoload($classname) {
	$namespace = substr ( $classname, 0, strrpos ( $classname, '\\' ) );
	$namespace = str_replace ( '\\', DIRECTORY_SEPARATOR, $classname );
	$classPath = ROOT . str_replace ( '\\', '/', $namespace ) . '.php';
	if (is_readable ( $classPath )) {
		require_once $classPath;
	}
}

// V2.5 SAMPLE MESSAGE
// ADT_A02 SAMPLE
// 転科・転棟実施メッセージ
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111220224447.3399||ADT^A02^ADT_A02|20111220000001|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"EVN||201112202100||||201112250900|SEND001\r" . 
"PID|0001||9999013||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19480405|M\r".
"PV1|0001|I|32^302^1^^^N||||220^医師^一郎^^^^^^^L^^^^^I|||01|||||||ishi01^医師一郎^^^^^^^^L^^^^^I|||||||||||||||||||||||||||" ;

// G7 Context
$g7msg = new mg\g7\Context ();
// PARSE
$obj = $g7msg->parse ( $message );
// MSH DUMP
$msh = $obj->getMSH ();
dumpMSH ( $msh);
// EVN DUMP
$evn = $obj->getEVN ();
dumpEVN ( $evn);
// PID DUMP
$pid = $obj->getPID ();
dumpPID ( $pid );
// PV1 DUMP
$pv1 = $obj->getPV1 ();
dumpPV1 ( $pv1 );