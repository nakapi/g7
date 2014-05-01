<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpEI.php';
require_once 'datatype/dumpString.php';
function dumpOBX($obj) {
	echo "===OBX" . "===\n";
	echo "OBX0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "OBX1";
	dumpSI ( $obj->getSetIdObx ()->getIterator () );
	echo "OBX2";
	dumpID ( $obj->getValueType ()->getIterator () );
	echo "OBX3";
	dumpCWE ( $obj->getObservationIdentifier ()->getIterator () );
	echo "OBX4";
	dumpST ( $obj->getObservationSubId ()->getIterator () );
	echo "OBX5";
	if ($obj->getObservationIdentifier ()[0]->getIdentifier () === '5H010000009199911') {
		dumpCWE ( $obj->getObservationValue ()->getIterator () );
	} else {
		dumpString ( $obj->getObservationValue ()->getIterator () );
	}
	echo "OBX6";
	dumpCWE ( $obj->getUnits ()->getIterator () );
	echo "OBX7";
	dumpST ( $obj->getReferenceRange ()->getIterator () );
	echo "OBX8";
	dumpIS ( $obj->getAbnormalFlags ()->getIterator () );
	echo "OBX9";
	dumpNM ( $obj->getProbability ()->getIterator () );
	echo "OBX10";
	dumpID ( $obj->getNatureOfAbnormalTest ()->getIterator () );
	echo "OBX11";
	dumpID ( $obj->getObservResultStatus ()->getIterator () );
	echo "OBX12";
	dumpTS ( $obj->getDataLastObsNormalValues ()->getIterator () );
	echo "OBX13";
	dumpST ( $obj->getUserDefinedAccessChecks ()->getIterator () );
	echo "OBX14";
	dumpTS ( $obj->getDateOfTheObservation ()->getIterator () );
	echo "OBX15";
	dumpCWE ( $obj->getProducersId ()->getIterator () );
	echo "OBX16";
	dumpXCN ( $obj->getResponsibleObserver ()->getIterator () );
	echo "OBX17";
	dumpCWE ( $obj->getObservationMethod ()->getIterator () );
	echo "OBX18";
	dumpEI ( $obj->getEquipmentInstanceIdentifier ()->getIterator () );
	echo "OBX19";
	dumpTS ( $obj->getDateOfTheAnalysis ()->getIterator () );
}