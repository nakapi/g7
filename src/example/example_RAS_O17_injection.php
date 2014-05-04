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
"MSH|^~\\&|HIS123|SEND|GW|RCV|20110701113813.225||RAS^O17^RAS_O17|20110701113813|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"PID|0001||9999013^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19650415|M\r".
"PV1|0001|I|32^302^^^^N||||110^医師^一郎^^^^^^^L^^^^^I|||01\r" . 
"ORC|NW|123456789012345||123456789012345_01_001|||||20110701113613|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|||||01^内科^99XY1|PC32^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||I^入院患者オーダ^HL70482\r".
"RXA|0|1|20110701080521|20110701130543|620007329^ソリターT３号輸液５００ｍＬ^HOT9|1|HON^本^MR9P||^左手に実施^99IC2|200^看護^花子^^^^^^^L^^^^^I|09A^021^4^^^N|102ml/hr||||||||CP||20110701130613\r".
"RXA|0|1|20110701080521|20110701130543|620002559^アドナ注（静脈用）50mg^HOT9|1|AMP^アンプ^MR9P||^左手に実施^99IC2|200^看護^花子^^^^^^^L^^^^^I|09A^021^4^^^N|102ml/hr||||||||CP||20110701130613\r".
"RXR|IV^静脈内^HL70162||IVP^点滴ポンプ^HL70164";

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
