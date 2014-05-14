<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCQ.php';
require_once 'datatype/dumpNM.php';
function dumpZE2($obj) {
	echo "===ZE2" . "===\n";
	echo "ZE20";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "ZE21";
	dumpSI ( $obj->getSetIdZe2 ()->getIterator () );
	echo "ZE22";
	dumpCQ ( $obj->getTubeVoltage ()->getIterator () );
	echo "ZE23";
	dumpCQ ( $obj->getTubeCurrent ()->getIterator () );
	echo "ZE24";
	dumpCQ ( $obj->getDistance ()->getIterator () );
	echo "ZE25";
	dumpCQ ( $obj->getTime ()->getIterator () );
	echo "ZE26";
	dumpNM ( $obj->getNumberOfExposure ()->getIterator () );
	echo "ZE27";
	dumpST ( $obj->getExposureCommentField ()->getIterator () );
}