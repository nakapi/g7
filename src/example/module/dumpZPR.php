<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpCWE.php';
function dumpZPR($obj) {
	echo "===ZPR" . "===\n";
	echo "ZPR0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "ZPR1";
	dumpCWE ( $obj->getModifierCodePrefix ()->getIterator () );
	echo "ZPR2";
	dumpCWE ( $obj->getDiseaseCode ()->getIterator () );
	echo "ZPR3";
	dumpCWE ( $obj->getModifierCodeSuffix ()->getIterator () );
	echo "ZPR4";
	dumpCWE ( $obj->getModifierCodeForExchangePrefix ()->getIterator () );
	echo "ZPR5";
	dumpCWE ( $obj->getDiseaseCodeForExchange ()->getIterator () );
	echo "ZPR6";
	dumpCWE ( $obj->getModifierCodeForExchangeSuffix ()->getIterator () );
	echo "ZPR7";
	dumpST ( $obj->getComment ()->getIterator () );
}