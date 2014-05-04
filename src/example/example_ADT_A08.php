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
// ADT_A08 SAMPLE
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111220224447.3399||ADT^A08^ADT_A01|20111220000001|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"EVN||201112202100|||||SEND001\r" . 
"PID|0001||9999013||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19480405|M|||^^^^422-8033^JPN^H^静岡県静岡市登呂１ー３ー５||^PRN^PH^^^^^^^^^054-000-0000~^EMR^PH^^^^^^^^^03-5999-9999|^WPN^PH^^^^^^^^^03-3599-9993|||||||||||||||||||20111219121551\r" . 
"NK1|1|患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P|SEL^本人^HL70063|^^^^422-8033^JPN^H^静岡県静岡市登呂１ー３ー５~^^^^1050003^^B^東京都港区虎ノ門6丁目3番3号|^PRN^PH^^^^^^^^^054-000-0000|^WPN^PH^^^^^^^^^03-3599-9993|||||||鹿ノ門商事株式会社^D\r" . 
"PV1|0001|I|32^302^1^^^N||||220^医師^一郎^^^^^^^L^^^^^I\r" . 
"DB1|1|PT||Y\r" . "OBX|1|NM|9N001000000000001^身長^JC10||167.8|cm^cm^ISO+|||||F\r" . 
"OBX|2|NM|9N001000000000001^体重^JC10||63.5|kg^kg^ISO+|||||F\r" . 
"OBX|3|CWE|5H010000009199911^血液型-ABO式^JC10||A^A^JSHR002||||||F\r" . 
"AL1|1|DA^薬剤アレルギー^HL70127|1^ペニシリン^99XYZ\r" . 
"IN1|1|67^国民健康保険退職者^JHSD0001|67999991|||||||||2091201|||||SEL^本人^HL70063";

// G7 Context
$g7msg = new mg\g7\Context ();
// PARSE
$obj = $g7msg->parse ( $message );
// MSH DUMP
$msh = $obj->getMSH ();
foreach ( $msh as $key => $val ) {
	dumpMSH ( $val );
}
// EVN DUMP
$evn = $obj->getEVN ();
foreach ( $evn as $key => $val ) {
	dumpEVN ( $val );
}
// PID DUMP
$pid = $obj->getPID ();
foreach ( $pid as $key => $val ) {
	dumpPID ( $val );
}

// NK1 DUMP
$nk1 = $obj->getNK1 ();
$iterator = $nk1->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpNK1 ( $row['NK1'] );
	}
	$iterator->next();
}
// PV1 DUMP
$pv1 = $obj->getPV1 ();
foreach ( $pv1 as $key => $val ) {
	dumpPV1 ( $val );
}
// DB1 DUMP
$db1 = $obj->getDB1 ();
$iterator = $db1->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpDB1 ( $row['DB1'] );
	}
	$iterator->next();
}
// OBX DUMP
$obx = $obj->getOBX ();
$iterator = $obx->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpOBX ( $row['OBX'] );
	}
	$iterator->next();
}
// AL1 DUMP
$al1 = $obj->getAL1 ();
$iterator = $al1->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpAL1 ( $row['AL1'] );
	}
	$iterator->next();
}
// IN1 DUMP
$in1 = $obj->getIN1 ();
$iterator = $in1->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpIN1 ( $row['IN1'] );
	}
	$iterator->next();
}
