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
"PID|0001||9999013^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19480405|M|||^^^^422-8033^JPN^H^静岡県静岡市登呂１ー３ー５||^PRN^PH^^^^^^^^^054-000-0000|^WPN^PH^^^^^^^^^054-99-2455\r".
"PV1|0001|I|32^302^^^^N||||110^医師^一郎^^^^^^^L^^^^^I|||01\r" . 
"ORC|NW|123456789012345||123456789012345_01_001|||||20110701012410|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|32^302^^^^N||||01^内科^99XY1|PC01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||I^入院患者オーダ^HL70482\r".
"RXE||00^一般^99I02|510||ML^ミリリットル^MR9P|INJ^注射剤^MR9P|^５時間一定速度で^99IC6||||||||20110701-001||||||IHP^入院処方^MR9P~FTP^定時処方^99I01|H1|102|ml/hr^ミリリッター／時間^ISO+||||||||||||||||||09A^^^^^N\r".
"TQ1|1||||||201107010800|201107011300\r".
"RXR|IV^静脈内^HL70162|IVP^点滴ポンプ^HL70164\r".
"RXC|B|620007329^ソリターＴ３号輸液５００ｍＬ^HOT9|1|HON^本^MR9P\r".
"RXC|A|620002559^アドナ注（静脈用）50mg^HOT9|1|AMP^アンプル^MR9P\r".
"ORC|NW|123456789012345||123456789012345_01_002|||||20090701012410|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|32^302^^^^N||||01^内科^99XY1|PC01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||I^入院患者オーダ^HL70482\r".
"RXE||00^一般^99I02|510||ML^ミリリットル^MR9P|INJ^注射剤^MR9P|^５時間一定速度で^99IC6||||||||20110701-001||||||IHP^入院処方^MR9P~FTP^定時処方^99I01|H1|102|ml/hr^ミリリッター／時間^ISO+||||||||||||||||||09A^^^^^N\r".
"TQ1|1||||||201107011300|201107011800\r".
"RXR|IV^静脈内^HL70162|IVP^点滴ポンプ^HL70164\r".
"RXC|B|620007329^ソリターＴ３号輸液５００ｍＬ^HOT9|1|HON^本^MR9P\r".
"RXC|A|620002559^アドナ注（静脈用）50mg^HOT9|1|AMP^アンプル^MR9P\r".
"ORC|NW|123456789012345||123456789012345_01_003|||||20090701012410|058^入力者^花子^^^^^^^L^^^^^I||110^医師^一郎^^^^^^^L^^^^^I|32^302^^^^N||||01^内科^99XY1|PC01^^99XY2|||登呂病院|^^^^422-8033^JPN^^静岡県静岡市駿河区登呂３ー１ー１|^^^^^^^^^^^054-284-9122||||||I^入院患者オーダ^HL70482\r".
"RXE||00^一般^99I02|510||ML^ミリリットル^MR9P|INJ^注射剤^MR9P|^５時間一定速度で^99IC6||||||||20110701-001||||||IHP^入院処方^MR9P~FTP^定時処方^99I01|H1|102|ml/hr^ミリリッター／時間^ISO+||||||||||||||||||09A^^^^^N\r".
"TQ1|1||||||201107011800|201107012300\r".
"RXR|IV^静脈内^HL70162|IVP^点滴ポンプ^HL70164\r".
"RXC|B|620007329^ソリターＴ３号輸液５００ｍＬ^HOT9|1|HON^本^MR9P\r".
"RXC|A|620002559^アドナ注（静脈用）50mg^HOT9|1|AMP^アンプル^MR9P";

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
// ORDER DUMP
$order = $obj->getORDER ();
dumpORDER($order);
