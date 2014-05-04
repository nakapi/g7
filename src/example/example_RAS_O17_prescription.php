<?php
require_once 'module/dumpMSH.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPV1.php';
require_once 'module/dumpORDER_RAS_O17.php';
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
// RAS_O17 SAMPLE
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20110701113813.225||RAS^O17^RAS_O17|20110701113813225|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"PID|0001||9999013^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19650415|M\r".
"PV1|0001|I|32^302^^^^N||||110^医師^一郎^^^^^^^L^^^^^I|||01\r" . 
"ORC|NW|123456789012345||1|||||20110630141500|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|||||01^内科^99XY1|PC32^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||I^入院患者オーダ^HL70482\r".
"RXA|0|1|201107010830|201107010830|108665201^ダーゼン錠(５mg)^HOT9|1|TAB^錠^MR9P|||200^看護^花子^^^^^^^L^^^^^I|09A^021^4^^^N|||||||||CP||20110701100613\r".
"RXA|0|1|201107010830|201107010830|110626901^パンスポリンＴ錠錠(１００mg)^HOT9|2|TAB^錠^MR9P|||200^看護^花子^^^^^^^L^^^^^I|09A^021^4^^^N|||||||||CP||20110701100613\r".
"RXR|P0^口^HL70162";

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
// ORDER DUMP
$order = $obj->getORDER ();
dumpORDER($order);
