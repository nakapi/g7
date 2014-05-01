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
// ADT_A13 SAMPLE
// 退院実施取消メッセージ
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111220224447.3399||ADT^A13^ADT_A01|20111220000001|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"EVN||201112202100||||201112201200|SEND001\r" . 
"PID|0001||9999013||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19700405|M\r".
"PV1|0001|I|41^460^2^^^N||||607^医師^一郎^^^^^^^L^^^^^I|||08|||||||607^医師^一郎^^^^^^^L^^^^^I|||||||||||||||||||01|||||||||201112201200" ;

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
dumpPV1 ( $pv1 );
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
