<?php
require_once 'module/dumpMSH.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPV1.php';
require_once 'module/dumpAL1.php';
require_once 'module/dumpORDER_RDE_O11.php';
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
// RDE_O11 SAMPLE
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20110701224603.984||RDE^O11^RDE_O11|20110701000001|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"PID|0001||9999013^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19480405|M|||^^^^422-8033^JPN^H^静岡県静岡市登呂１ー３ー５||^PRN^PH^^^^^^^^^054-000-0000|^WPN^PH^^^^^^^^^054-99-2455|||||||||||||||||||20110601121551\r" . 
"PV1|0001|0|01^^^^^C||||110^医師^一郎^^^^^^^L^^^^^I|||01\r" . 
"ORC|NW|000000011000185||1|||||20110701103045|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|10^^^^^C||||01^内科^99XY1|VMDOCX01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||0^外来患者オーダ^HL70482\r".
"RXE||108665201^ダーゼン錠（５mg）^HOT9|1||TAB^錠^MR9P|||||15|TAB^錠^MR9P||||2011070112345||||3^TAB&錠&MR9P||OHP^外来処方^MR9P~OHI^院内処方^MR9P\r".
"TQ1|1||1013044400000000^内服・経口・１日３回朝昼夕食後^JAMISDP01|||5^d|2011070100\r".
"RXR|P0^口^HL70162\r".
"ORC|NW|000000011000185||1|||||20110701103045|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|10^^^^^C||||01^内科^99XY1|VMDOCX01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||0^外来患者オーダ^HL70482\r".
"RXE||110626901^パンスポリンＴ錠（１００mg）^HOT9|2||TAB^錠^MR9P|||||30|TAB^錠^MR9P||||||||6^TAB&錠&MR9P||OHP^外来処方^MR9P~OHI^院内処方^MR9P\r".
"TQ1|1||1013044400000000^内服・経口・１日３回朝昼夕食後^JAMISDP01|||5^d|2011070100\r".
"RXR|P0^口^HL70162\r".
"ORC|NW|000000011000185||2|||||20110701103045|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|10^^^^^C||||01^内科^99XY1|VMDOCX01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||0^外来患者オーダ^HL70482\r".
"RXE||100607002^アレピアチン１０倍散^HOT9|50||MG^ミリグラム^MR9P|PWD^散剤^MR9P||||1400|MG^ミリグラム^MR9P||||2011070112345||||100^MG&ミリグラム&MR9P||OHP^外来処方^MR9P~OHI^院内処方^MR9P\r".
"TQ1|1||1012040400000000^内服・経口・１日２回朝夕食後^JAMISDP01|||14^d|2011070100\r".
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
