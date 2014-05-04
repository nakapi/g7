<?php
require_once 'module/dumpMSH.php';
require_once 'module/dumpPID.php';
require_once 'module/dumpPROBLEM.php';
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
// PPR_ZD1 SAMPLE
$message = 
"MSH|^~\\&|HIS123|SEND|GW|RCV|20111209163030||PPR^ZD1^PPR_ZD1|201112091630305|P|2.5||||||~ISO IR87||ISO 2022-1994\r" . 
"PID|0001||1234567890^^^^PI||患者^太郎^^^^^L^I~カンジャ^タロウ^^^^^L^P||19650415|M\r" . 
"PRB|AD|20110915|20054174^胃炎^MDCDX2|123456789012345|||20110831||20110915|K297^^I10^0^外来時^JHSD0004||||N^回復せず^HL70241|20110915|20110831|胃炎|1^主診断^JHSD0007|||||||V^非常に限定^HL70177\r" . 
"ZPR||20054174^胃炎^MDCDX2|||TSQF^胃炎^MDCDX2\r" . 
"ZI1|1|01^全国健康保険協会管掌健康保険^JHSD0001|1130012|全国健康保険協会東京支部||||||123456|11010203|20110901|20120831||13||SEL^本人^HL70063|19650415|^^^^1050001^^H^東京都港区虎ノ門１ー１９ー９||70\r" . 
"ORC|NW|123456789012345||||||||||110^医師^一郎^^^^^^^L^^^^^I~^イシ^イチロウ^^^^^^^L^^^^^P|||||01^内科^MML028||||||||||||0^外来患者オーダ^HL70482";

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
// PRB DUMP
$problem = $obj->getPROBLEM ();
dumpPROBLEM ( $problem );