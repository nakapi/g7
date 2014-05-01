<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCX.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpHD.php';
function dumpEVN($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$segment = $iterator->current ();
		echo "===EVN" . $iterator->key () . "===\n";
		echo "EVN0";
		dumpST ( $segment->getSegmentId ()->getIterator () );
		echo "EVN1";
		dumpID ( $segment->getEventTypeCode ()->getIterator () );
		echo "EVN2";
		dumpTS ( $segment->getRecordedDate ()->getIterator () );
		echo "EVN3";
		dumpTS ( $segment->getDatePlannedEvent ()->getIterator () );
		echo "EVN4";
		dumpIS ( $segment->getEventReasonCode ()->getIterator () );
		echo "EVN5";
		dumpXCN ( $segment->getOperatorId ()->getIterator () );
		echo "EVN6";
		dumpTS ( $segment->getEventOccurred ()->getIterator () );
		echo "EVN7";
		dumpHD ( $segment->getEventFacility ()->getIterator () );
		$iterator->next ();
	}
}