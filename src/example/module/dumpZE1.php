<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpJCC.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpZRD.php';
require_once 'datatype/dumpXTN.php';
function dumpZE1($obj) {
	echo "===ZE1" . "===\n";
	echo "ZE10";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "ZE11";
	dumpSI ( $obj->getSetIdZe1 ()->getIterator () );
	echo "ZE12";
	dumpIS ( $obj->getControlCode ()->getIterator () );
	echo "ZE13";
	dumpCWE ( $obj->getProcedure ()->getIterator () );
	echo "ZE14";
	dumpNM ( $obj->getNumberOfProcedure ()->getIterator () );
	echo "ZE15";
	dumpCWE ( $obj->getBillingInformation ()->getIterator () );
	echo "ZE16";
	dumpJCC ( $obj->getHealthcarePractitionerCategory ()->getIterator () );
	echo "ZE17";
	dumpXCN ( $obj->getHealthcarePractitioner ()->getIterator () );
	echo "ZE18";
	dumpIS ( $obj->getMaterialCategory ()->getIterator () );
	echo "ZE19";
	dumpZRD ( $obj->getMaterialUsed ()->getIterator () );
	echo "ZE110";
	dumpXTN ( $obj->getContactInformation ()->getIterator () );
	echo "ZE111";
	dumpST ( $obj->getPerformedCommentField ()->getIterator () );
	echo "ZE112";
	dumpST ( $obj->getBillingCommentField ()->getIterator () );
}