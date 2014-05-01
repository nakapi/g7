<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpHD.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpMSG.php';
require_once 'datatype/dumpPT.php';
require_once 'datatype/dumpVID.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpEI.php';
// DUMP METHOD
function dumpMSH($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$segment = $iterator->current ();
		echo "===MSH" . $iterator->key () . "===\n";
		echo "MSH0";
		dumpST ( $segment->getSegmentId ()->getIterator () );
		echo "MSH1";
		dumpST ( $segment->getFieldSeparator ()->getIterator () );
		echo "MSH2";
		dumpST ( $segment->getCodingCharacter ()->getIterator () );
		echo "MSH3";
		dumpHD ( $segment->getToApplication ()->getIterator () );
		echo "MSH4";
		dumpHD ( $segment->getToInstitution ()->getIterator () );
		echo "MSH5";
		dumpHD ( $segment->getFromApplication ()->getIterator () );
		echo "MSH6";
		dumpHD ( $segment->getFromInstitution ()->getIterator () );
		echo "MSH7";
		dumpTS ( $segment->getMessageDate ()->getIterator () );
		echo "MSH8";
		dumpST ( $segment->getSecurity ()->getIterator () );
		echo "MSH9";
		dumpMSG ( $segment->getMessageType ()->getIterator () );
		echo "MSH10";
		dumpST ( $segment->getMessageControlId ()->getIterator () );
		echo "MSH11";
		dumpPT ( $segment->getProcessId ()->getIterator () );
		echo "MSH12";
		dumpVID ( $segment->getVersion ()->getIterator () );
		echo "MSH13";
		dumpNM ( $segment->getSeqId ()->getIterator () );
		echo "MSH14";
		dumpST ( $segment->getContinuationPoint ()->getIterator () );
		echo "MSH15";
		dumpID ( $segment->getAcceptanceAckType ()->getIterator () );
		echo "MSH16";
		dumpID ( $segment->getApplicationAckType ()->getIterator () );
		echo "MSH17";
		dumpID ( $segment->getCountryCode ()->getIterator () );
		echo "MSH18";
		dumpID ( $segment->getCharacterSet ()->getIterator () );
		echo "MSH19";
		dumpCWE ( $segment->getMajorLanguage ()->getIterator () );
		echo "MSH20";
		dumpID ( $segment->getAlternateCharacterSetProcedure ()->getIterator () );
		echo "MSH21";
		dumpEI ( $segment->getMessageProfileId ()->getIterator () );
		$iterator->next ();
	}
}