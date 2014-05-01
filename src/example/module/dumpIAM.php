<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpCNE.php';
require_once 'datatype/dumpEI.php';
require_once 'datatype/dumpDT.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpXPN.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpXON.php';
function dumpIAM($obj) {
	echo "===IAM" . "===\n";
	echo "IAM0";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "IAM1";
	dumpSI ( $obj->getSetIdIam ()->getIterator () );
	echo "IAM2";
	dumpCWE ( $obj->getAllergenTypeCode ()->getIterator () );
	echo "IAM3";
	dumpCWE ( $obj->getAllergenCodeMnemonicDescription ()->getIterator () );
	echo "IAM4";
	dumpCWE ( $obj->getAllergySeverityCode ()->getIterator () );
	echo "IAM5";
	dumpST ( $obj->getAllergyReactionCode ()->getIterator () );
	echo "IAM6";
	dumpCNE ( $obj->getAllergyActionCode ()->getIterator () );
	echo "IAM7";
	dumpEI ( $obj->getAllergyUniqueIdentifier ()->getIterator () );
	echo "IAM8";
	dumpST ( $obj->getActionReason ()->getIterator () );
	echo "IAM9";
	dumpCWE ( $obj->getSensitivityToCausativeAgentCode ()->getIterator () );
	echo "IAM10";
	dumpCWE ( $obj->getAllergenGroupCodeMnemonicDescription ()->getIterator () );
	echo "IAM11";
	dumpDT ( $obj->getOnsetDate ()->getIterator () );
	echo "IAM12";
	dumpST ( $obj->getOnsetDateText ()->getIterator () );
	echo "IAM13";
	dumpTS ( $obj->getReportedTime ()->getIterator () );
	echo "IAM14";
	dumpXPN ( $obj->getReportedBy ()->getIterator () );
	echo "IAM15";
	dumpCWE ( $obj->getRelationshipToPatientCode ()->getIterator () );
	echo "IAM16";
	dumpCWE ( $obj->getAlertDeviceCode ()->getIterator () );
	echo "IAM17";
	dumpCWE ( $obj->getAllergyClinicalStatusCode ()->getIterator () );
	echo "IAM18";
	dumpXCN ( $obj->getStatusedByPerson ()->getIterator () );
	echo "IAM19";
	dumpXON ( $obj->getStatusedByOrganization ()->getIterator () );
	echo "IAM20";
	dumpTS ( $obj->getStatusedAtTime ()->getIterator () );
}