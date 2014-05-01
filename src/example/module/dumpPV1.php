<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpPL.php';
require_once 'datatype/dumpCX.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpFC.php';
require_once 'datatype/dumpDT.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpDLD.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpTS.php';
function dumpPV1($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$segment = $iterator->current ();
		echo "===PV1" . $iterator->key () . "===\n";
		echo "PV10";
		dumpST ( $segment->getSegmentId ()->getIterator () );
		echo "PV11";
		dumpSI ( $segment->getSetIdPv1 ()->getIterator () );
		echo "PV12";
		dumpIS ( $segment->getPatientClass ()->getIterator () );
		echo "PV13";
		dumpPL ( $segment->getAssignedPatientLocation ()->getIterator () );
		echo "PV14";
		dumpIS ( $segment->getAdmissionType ()->getIterator () );
		echo "PV15";
		dumpCX ( $segment->getPreadmitNumber ()->getIterator () );
		echo "PV16";
		dumpPL ( $segment->getPriorPatientLocation ()->getIterator () );
		echo "PV17";
		dumpXCN ( $segment->getAttendingDoctor ()->getIterator () );
		echo "PV18";
		dumpXCN ( $segment->getReferringDoctor ()->getIterator () );
		echo "PV19";
		dumpXCN ( $segment->getConsultingDoctor ()->getIterator () );
		echo "PV110";
		dumpIS ( $segment->getHospitalService ()->getIterator () );
		echo "PV111";
		dumpPL ( $segment->getTemporaryLocation ()->getIterator () );
		echo "PV112";
		dumpIS ( $segment->getPreadmitTestIndicator ()->getIterator () );
		echo "PV113";
		dumpIS ( $segment->getReadmissionIndicator ()->getIterator () );
		echo "PV114";
		dumpIS ( $segment->getAdmitSource ()->getIterator () );
		echo "PV115";
		dumpIS ( $segment->getAmbulatoryStatus ()->getIterator () );
		echo "PV116";
		dumpIS ( $segment->getVipIndicator ()->getIterator () );
		echo "PV117";
		dumpXCN ( $segment->getAdmittingDoctor ()->getIterator () );
		echo "PV118";
		dumpIS ( $segment->getPatientType ()->getIterator () );
		echo "PV119";
		dumpCX ( $segment->getVisitNumber ()->getIterator () );
		echo "PV120";
		dumpFC ( $segment->getFinancialClass ()->getIterator () );
		echo "PV121";
		dumpIS ( $segment->getChargePriceIndicator ()->getIterator () );
		echo "PV122";
		dumpIS ( $segment->getCourtesyCode ()->getIterator () );
		echo "PV123";
		dumpIS ( $segment->getCreditRating ()->getIterator () );
		echo "PV124";
		dumpIS ( $segment->getContractCode ()->getIterator () );
		echo "PV125";
		dumpDT ( $segment->getContractEffectiveDate ()->getIterator () );
		echo "PV126";
		dumpNM ( $segment->getContractAmount ()->getIterator () );
		echo "PV127";
		dumpNM ( $segment->getContractPeriod ()->getIterator () );
		echo "PV128";
		dumpIS ( $segment->getInterestCode ()->getIterator () );
		echo "PV129";
		dumpIS ( $segment->getTransferToBadDebtCode ()->getIterator () );
		echo "PV130";
		dumpDT ( $segment->getTransferToBadDebtDate ()->getIterator () );
		echo "PV131";
		dumpIS ( $segment->getBadDebtAgencyCode ()->getIterator () );
		echo "PV132";
		dumpNM ( $segment->getBadDebtTransferAmount ()->getIterator () );
		echo "PV133";
		dumpNM ( $segment->getBadDebtRecoveryAmount ()->getIterator () );
		echo "PV134";
		dumpIS ( $segment->getDeleteAccountIndicator ()->getIterator () );
		echo "PV135";
		dumpDT ( $segment->getDeleteAccountDate ()->getIterator () );
		echo "PV136";
		dumpIS ( $segment->getDischargeDisposition ()->getIterator () );
		echo "PV137";
		dumpDLD ( $segment->getDischargedToLocation ()->getIterator () );
		echo "PV138";
		dumpCWE ( $segment->getDietType ()->getIterator () );
		echo "PV139";
		dumpIS ( $segment->getServicingFacility ()->getIterator () );
		echo "PV140";
		dumpIS ( $segment->getBedStatus ()->getIterator () );
		echo "PV141";
		dumpIS ( $segment->getAccountStatus ()->getIterator () );
		echo "PV142";
		dumpPL ( $segment->getPendingLocation ()->getIterator () );
		echo "PV143";
		dumpPL ( $segment->getPriorTemporaryLocation ()->getIterator () );
		echo "PV144";
		dumpTS ( $segment->getAdmitDate ()->getIterator () );
		echo "PV145";
		dumpTS ( $segment->getDischargeDate ()->getIterator () );
		echo "PV146";
		dumpNM ( $segment->getCurrentPatientBalance ()->getIterator () );
		echo "PV147";
		dumpNM ( $segment->getTotalCharges ()->getIterator () );
		echo "PV148";
		dumpNM ( $segment->getTotalAdjustments ()->getIterator () );
		echo "PV149";
		dumpNM ( $segment->getTotalPayments ()->getIterator () );
		echo "PV150";
		dumpCX ( $segment->getAlternateVisitID ()->getIterator () );
		echo "PV151";
		dumpIS ( $segment->getVisitIndicator ()->getIterator () );
		echo "PV152";
		dumpXCN ( $segment->getOtherHealthcareProvider ()->getIterator () );
		$iterator->next ();
	}
}