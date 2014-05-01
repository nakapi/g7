<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpCX.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpDT.php';
function dumpDB1($obj) {
	echo "===DB1" . "===\n";
	echo "DB10";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "DB11";
	dumpSI ( $obj->getSetIdDb1 ()->getIterator () );
	echo "DB12";
	dumpIS ( $obj->getDisabledPersonCode ()->getIterator () );
	echo "\t(PT:患者,GT:保証人,IN:被保険者,AP:関係者)\n";
	echo "DB13";
	dumpCX ( $obj->getDisabledPersonIdentifier ()->getIterator () );
	echo "DB14";
	dumpID ( $obj->getDisabledIndicator ()->getIterator () );
	echo "\t(Y:障害あり,N:障害なし)\n";
	echo "DB15";
	dumpDT ( $obj->getDisabilityStartDate ()->getIterator () );
	echo "DB16";
	dumpDT ( $obj->getDisabilityEndDate ()->getIterator () );
	echo "DB17";
	dumpDT ( $obj->getDisabilityReturnToWorkDate ()->getIterator () );
	echo "DB18";
	dumpDT ( $obj->getDisabilityUnableToWorkDate ()->getIterator () );
}