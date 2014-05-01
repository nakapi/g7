<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpCWE.php';
function dumpRXR($obj) {
	echo "===RXR" . "===\n";
	echo "RXR0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "RXR1";
	dumpCWE ( $obj->getRoute ()->getIterator () );
	echo "RXR2";
	dumpCWE ( $obj->getSite ()->getIterator () );
	echo "RXR3";
	dumpCWE ( $obj->getAdministrationDevice ()->getIterator () );
	echo "RXR4";
	dumpCWE ( $obj->getAdministrationMethod ()->getIterator () );
	echo "RXR5";
	dumpCWE ( $obj->getRoutingInstruction ()->getIterator () );
	echo "RXR6";
	dumpCWE ( $obj->getAdministrationSiteModifier ()->getIterator () );
}