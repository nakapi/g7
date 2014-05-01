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

// V2.5 SAMPLE MESSAGE
// ADT_A14 SAMPLE
// 入院保留の取り消しメッセージ
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111220224447.3399||ADT^A27^ADT_A21|20111220000001|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"EVN||201112202100|201112211000||||SEND001\r" . 
"PID|0001||9999013||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19480405|M|||^^^^422-8033^JPN^H^静岡県静岡市登呂１ー３ー５||^PRN^PH^^^^^^^^^054-000-0000~^EMR^PH^^^^^^^^^03-5999-9999|^WPN^PH^^^^^^^^^03-3599-9993|||||||||||||||||||20111219121551\r" . 
"PV1|0001|I|32^302^1^^^N||||220^医師^一郎^^^^^^^L^^^^^I\r".
"PV2|031^304^01^^^N|||||||20111222201112.5555|20111231103000.6666||||||||||||||||||||||||||||||||||||||";

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
// PV2 DUMP
$pv2 = $obj->getPV2 ();
dumpPV2 ( $pv2 );