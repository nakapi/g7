<?php
require_once 'module/dumpEVN.php';
require_once 'module/dumpMSH.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPV1.php';
require_once 'module/dumpPV2.php';
require_once 'module/dumpIAM.php';
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
// ADT_A60 SAMPLE
// アレルギー情報更新・更新メッセージ
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111014232213||ADT^A60^ADT_A60|20111014232213|P|2.5||||||^ISO IR87||ISO 2022-1994\r".
"EVN||20111013232213\r".
"PID|0001||12345678^^^^PI||山田^太郎^^^^^L^I~ヤマダ^タロウ^^^^^L^P||19650415|M\r".
"IAM|1|LA^花粉アレルギー^HL70127|5A1002216023023^スギ^JC10|MI^軽度^HL70128|目のかゆみ|A^追加^HL70323|||||199601\r".
"IAM|2|FA^食物アレルギー^HL70127|5A1002411023006^ソバ^JC10|MO^中等度^HL70128|湿疹|A^追加^HL70323||||||小学校低学年の頃\r".
"IAM|3|EA^環境アレルギー^HL70127|5A1102700023023^ハウスダスト^JC10|MI^軽度^HL0128|くしゃみ|A^追加^HL70323|||||200302\r".
"IAM|4|DA^薬剤アレルギー^HL70127|106824501^アリナミン^HOT9|MO^中等度^HL70128|のどの渇きが止まらない|A^追加^HL70323|||||20070710";

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
// IAM DUMP
$iam = $obj->getIAM ();
$iterator = $iam->getIterator ();
while ( $iterator->valid () ) {
	$rows = $iterator->current ();
	foreach ( $rows as $key => $row ) {
		dumpIAM ( $row['IAM'] );
	}
	$iterator->next();
}
