<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpDT.php';
function dumpAL1($obj) {
	echo "===AL1" . "===\n";
	echo "AL10";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "AL11";
	dumpSI ( $obj->getSetIdAl1 ()->getIterator () );
	echo "AL12";
	dumpCWE ( $obj->getAllergyType ()->getIterator () );
	echo "AL13";
	dumpCWE ( $obj->getAllergyCodeMnemonicDescription ()->getIterator () );
	echo "AL14";
	dumpCWE ( $obj->getAllergySeverity ()->getIterator () );
	echo "AL15";
	dumpST ( $obj->getAllergyReaction ()->getIterator () );
	echo "AL16";
	dumpDT ( $obj->getIdentificationDate ()->getIterator () );
}