<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpNM.php';
function dumpRXC($obj) {
	echo "===RXC" . "===\n";
	echo "RXC0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "RXC1";
	dumpID ( $obj->getRxComponentType ()->getIterator () );
	echo "RXC2";
	dumpCWE ( $obj->getComponentCode ()->getIterator () );
	echo "RXC3";
	dumpNM ( $obj->getComponentAmount ()->getIterator () );
	echo "RXC4";
	dumpCWE ( $obj->getComponentUnits ()->getIterator () );
	echo "RXC5";
	dumpNM ( $obj->getComponentStrength ()->getIterator () );
	echo "RXC6";
	dumpCWE ( $obj->getComponentStrengthUnits ()->getIterator () );
	echo "RXC7";
	dumpCWE ( $obj->getSupplementaryCode ()->getIterator () );
	echo "RXC8";
	dumpNM ( $obj->getComponentDrugStrengthVolume ()->getIterator () );
	echo "RXC9";
	dumpCWE ( $obj->getComponentDrugStrengthVolumeUnits ()->getIterator () );
}