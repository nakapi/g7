<?php
require_once 'module/dumpMSH.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPV1.php';
require_once 'module/dumpAL1.php';
require_once 'module/dumpORDER_OMD_O03.php';
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
// OMD_O03 SAMPLE
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111014232213||OMD^O03^OMD_O03|20111014232213|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"PID|0001||1234567890^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19650415|M\r" . 
"PV1|0001|I|32^302^^^^N||||110^医師^一郎^^^^^^^L^^^^^I|||01\r" . 
"ORC|NW|123456789012345|||||||20111013232213|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|||||01^内科^99XY1|PC32^^99XY2\r".
"TQ1|1||TID&１日３回||||2011101607||R^ルーチン^HL70485\r".
"ODS|D||001^^99XY3|塩分控えめ";

// G7 Context
$g7msg = new mg\g7\Context ();
// PARSE
$obj = $g7msg->parse ( $message );
// MSH DUMP
$msh = $obj->getMSH ();
foreach ( $msh as $key => $val ) {
	dumpMSH ( $val );
}
// PID DUMP
$pid = $obj->getPID ();
foreach ( $pid as $key => $val ) {
	dumpPID ( $val );
}
// PV1 DUMP
$pv1 = $obj->getPV1 ();
foreach ( $pv1 as $key => $val ) {
	dumpPV1 ( $val );
}
// ORC DUMP
$order = $obj->getORDER ();
dumpORDER( $order );
