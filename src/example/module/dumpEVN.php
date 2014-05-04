<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCX.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpHD.php';
function dumpEVN($obj) {
	echo "===EVN===\n";
	echo "EVN0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "EVN1";
	dumpID ( $obj->getEventTypeCode ()->getIterator () );
	echo "EVN2";
	dumpTS ( $obj->getRecordedDate ()->getIterator () );
	echo "EVN3";
	dumpTS ( $obj->getDatePlannedEvent ()->getIterator () );
	echo "EVN4";
	dumpIS ( $obj->getEventReasonCode ()->getIterator () );
	echo "EVN5";
	dumpXCN ( $obj->getOperatorId ()->getIterator () );
	echo "EVN6";
	dumpTS ( $obj->getEventOccurred ()->getIterator () );
	echo "EVN7";
	dumpHD ( $obj->getEventFacility ()->getIterator () );
}