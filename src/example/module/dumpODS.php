<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpCWE.php';
function dumpODS($obj) {
	echo "===ODS" . "===\n";
	echo "ODS0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "ODS1";
	dumpID ( $obj->getType ()->getIterator () );
	echo "ODS2";
	dumpCWE ( $obj->getServicePeriod ()->getIterator () );
	echo "ODS3";
	dumpCWE ( $obj->getDietSupplementOrPreferenceCode ()->getIterator () );
	echo "ODS4";
	dumpST ( $obj->getTextInstruction ()->getIterator () );
}