<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpLA2.php';
require_once 'datatype/dumpID.php';
function dumpRXA($obj) {
	echo "===RXA" . "===\n";
	echo "RXA0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "RXA1";
	dumpNM ( $obj->getGiveSubIdCounter ()->getIterator () );
	echo "RXA2";
	dumpNM ( $obj->getAdministrationSubIdCounter ()->getIterator () );
	echo "RXA3";
	dumpTS ( $obj->getTimeStartOfAdministration ()->getIterator () );
	echo "RXA4";
	dumpTS ( $obj->getTimeEndOfAdministration ()->getIterator () );
	echo "RXA5";
	dumpCWE ( $obj->getAdministeredCode ()->getIterator () );
	echo "RXA6";
	dumpNM ( $obj->getAdministeredAmount ()->getIterator () );
	echo "RXA7";
	dumpCWE ( $obj->getAdministeredUnits ()->getIterator () );
	echo "RXA8";
	dumpCWE ( $obj->getAdministeredDosageForm ()->getIterator () );
	echo "RXA9";
	dumpCWE ( $obj->getAdministrationNotes ()->getIterator () );
	echo "RXA10";
	dumpXCN ( $obj->getAdministeringProvider ()->getIterator () );
	echo "RXA11";
	dumpLA2 ( $obj->getAdministeredAtLocation ()->getIterator () );
	echo "RXA12";
	dumpST ( $obj->getAdministeredPerTimeUnit ()->getIterator () );
	echo "RXA13";
	dumpNM ( $obj->getAdministeredStrength ()->getIterator () );
	echo "RXA14";
	dumpCWE ( $obj->getAdministeredStrengthUnits ()->getIterator () );
	echo "RXA15";
	dumpST ( $obj->getSubstanceLotNumber ()->getIterator () );
	echo "RXA16";
	dumpTS ( $obj->getSubstanceExpirationDate ()->getIterator () );
	echo "RXA17";
	dumpCWE ( $obj->getSubstanceManufacturerName ()->getIterator () );
	echo "RXA18";
	dumpCWE ( $obj->getSubstanceTreatmentRefusalReason ()->getIterator () );
	echo "RXA19";
	dumpCWE ( $obj->getIndication ()->getIterator () );
	echo "RXA20";
	dumpID ( $obj->getCompletionStatus ()->getIterator () );
	echo "RXA21";
	dumpID ( $obj->getActionCodeRxa ()->getIterator () );
	echo "RXA22";
	dumpTS ( $obj->getSystemEntryTime ()->getIterator () );
	echo "RXA23";
	dumpNM ( $obj->getAdministeredDrugStrengthVolume ()->getIterator () );
	echo "RXA24";
	dumpCWE ( $obj->getAdministeredDrugStrengthVolumeUnits ()->getIterator () );
	echo "RXA25";
	dumpCWE ( $obj->getAdministeredBarcodeIdentifier ()->getIterator () );
	echo "RXA26";
	dumpID ( $obj->getPharmacyOrderType ()->getIterator () );
}