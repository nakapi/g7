<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpEI.php';
require_once 'datatype/dumpCWE.php';
function dumpCTI($obj) {
	echo "===CTI" . "===\n";
	echo "CTI0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "CTI1";
	dumpID ( $obj->getSponsorStudyId ()->getIterator () );
	echo "CTI2";
	dumpCWE ( $obj->getStudyPhaseIdentifier ()->getIterator () );
	echo "CTI3";
	dumpNM ( $obj->getStudyScheduledTimePoint ()->getIterator () );
}