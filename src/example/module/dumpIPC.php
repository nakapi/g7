<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpEI.php';
require_once 'datatype/dumpCWE.php';
function dumpIPC($obj) {
	echo "===IPC" . "===\n";
	echo "IPC0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "IPC1";
	dumpEI ( $obj->getAccessionIdentifier ()->getIterator () );
	echo "IPC2";
	dumpEI ( $obj->getRequestedProcedureId ()->getIterator () );
	echo "IPC3";
	dumpEI ( $obj->getStudyInstanceUid ()->getIterator () );
	echo "IPC4";
	dumpEI ( $obj->getScheduledProcedureStepId ()->getIterator () );
	echo "IPC5";
	dumpCWE ( $obj->getModality ()->getIterator () );
	echo "IPC6";
	dumpCWE ( $obj->getProtocolCode ()->getIterator () );
	echo "IPC7";
	dumpEI ( $obj->getScheduledStationName ()->getIterator () );
	echo "IPC8";
	dumpCWE ( $obj->getScheduledProcedureStepLocation ()->getIterator () );
	echo "IPC9";
	dumpST ( $obj->getScheduledAeTitle ()->getIterator () );
}