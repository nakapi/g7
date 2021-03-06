<?php
require_once 'datatype/dumpST.php';
require_once 'datatype/dumpSI.php';
require_once 'datatype/dumpCWE.php';
require_once 'datatype/dumpCX.php';
require_once 'datatype/dumpXON.php';
require_once 'datatype/dumpXAD.php';
require_once 'datatype/dumpXPN.php';
require_once 'datatype/dumpXTN.php';
require_once 'datatype/dumpDT.php';
require_once 'datatype/dumpAUI.php';
require_once 'datatype/dumpIS.php';
require_once 'datatype/dumpTS.php';
require_once 'datatype/dumpID.php';
require_once 'datatype/dumpXCN.php';
require_once 'datatype/dumpNM.php';
require_once 'datatype/dumpCP.php';
function dumpZI1($obj) {
	echo "===ZI1" . "===\n";
	echo "ZI10";
	dumpST ( $obj->getSegmentId ()->getIterator () );
	echo "ZI11";
	dumpSI ( $obj->getSetIdIn1 ()->getIterator () );
	echo "ZI12";
	dumpCWE ( $obj->getInsurancePlanID ()->getIterator () );
	echo "ZI13";
	dumpCX ( $obj->getInsuranceCompanyID ()->getIterator () );
	echo "ZI14";
	dumpXON ( $obj->getInsuranceCompanyName ()->getIterator () );
	echo "ZI15";
	dumpXAD ( $obj->getInsuranceCompanyAddress ()->getIterator () );
	echo "ZI16";
	dumpXPN ( $obj->getInsuranceContactPerson ()->getIterator () );
	echo "ZI17";
	dumpXTN ( $obj->getInsurancePhoneNumber ()->getIterator () );
	echo "ZI18";
	dumpST ( $obj->getGroupNumber ()->getIterator () );
	echo "ZI19";
	dumpXON ( $obj->getGroupName ()->getIterator () );
	echo "ZI110";
	dumpCX ( $obj->getInsuredsGroupEmpID ()->getIterator () );
	echo "ZI111";
	dumpXON ( $obj->getInsuredsGroupEmpName ()->getIterator () );
	echo "ZI112";
	dumpDT ( $obj->getPlanEffectiveDate ()->getIterator () );
	echo "ZI113";
	dumpDT ( $obj->getPlanExpirationDate ()->getIterator () );
	echo "ZI114";
	dumpAUI ( $obj->getAuthorizationInformation ()->getIterator () );
	echo "ZI115";
	dumpIS ( $obj->getPlanType ()->getIterator () );
	echo "ZI116";
	dumpXPN ( $obj->getNameOfInsured ()->getIterator () );
	echo "ZI117";
	dumpCWE ( $obj->getInsuredsRelationshipToPatient ()->getIterator () );
	echo "ZI118";
	dumpTS ( $obj->getInsuredsDateOfBirth ()->getIterator () );
	echo "ZI119";
	dumpXAD ( $obj->getInsuredsAddress ()->getIterator () );
	echo "ZI120";
	dumpIS ( $obj->getAssignmentOfBenefits ()->getIterator () );
	echo "ZI121";
	dumpIS ( $obj->getCoordinationOfBenefits ()->getIterator () );
	echo "ZI122";
	dumpST ( $obj->getCoordOfBenPriority ()->getIterator () );
	echo "ZI123";
	dumpID ( $obj->getNoticeOfAdmissionFlag ()->getIterator () );
	echo "ZI124";
	dumpDT ( $obj->getNoticeOfAdmissionDate ()->getIterator () );
	echo "ZI125";
	dumpID ( $obj->getReportOfEligibilityFlag ()->getIterator () );
	echo "ZI126";
	dumpDT ( $obj->getReportOfEligibilityDate ()->getIterator () );
	echo "ZI127";
	dumpIS ( $obj->getReleaseInformationCode ()->getIterator () );
	echo "ZI128";
	dumpST ( $obj->getPreAdmitCert ()->getIterator () );
	echo "ZI129";
	dumpTS ( $obj->getVerificationDate ()->getIterator () );
	echo "ZI130";
	dumpXCN ( $obj->getVerificationBy ()->getIterator () );
	echo "ZI131";
	dumpIS ( $obj->getTypeOfAgreementCode ()->getIterator () );
	echo "ZI132";
	dumpIS ( $obj->getBillingStatus ()->getIterator () );
	echo "ZI133";
	dumpNM ( $obj->getLifetimeReserveDays ()->getIterator () );
	echo "ZI134";
	dumpNM ( $obj->getDelayBeforeLRDay ()->getIterator () );
	echo "ZI135";
	dumpIS ( $obj->getCompanyPlanCode ()->getIterator () );
	echo "ZI136";
	dumpST ( $obj->getPolicyNumber ()->getIterator () );
	echo "ZI137";
	dumpCP ( $obj->getPolicyDeductible ()->getIterator () );
	echo "ZI138";
	dumpCP ( $obj->getPolicyLimitAmount ()->getIterator () );
	echo "ZI139";
	dumpNM ( $obj->getPolicyLimitDays ()->getIterator () );
	echo "ZI140";
	dumpCP ( $obj->getRoomRateSemiPrivate ()->getIterator () );
	echo "ZI141";
	dumpCP ( $obj->getRoomRatePrivate ()->getIterator () );
	echo "ZI142";
	dumpCWE ( $obj->getInsuredsEmploymentStatus ()->getIterator () );
	echo "ZI143";
	dumpIS ( $obj->getInsuredsSex ()->getIterator () );
	echo "ZI144";
	dumpXAD ( $obj->getInsuredsEmployerAddress ()->getIterator () );
	echo "ZI145";
	dumpST ( $obj->getVerificationStatus ()->getIterator () );
	echo "ZI146";
	dumpIS ( $obj->getPriorInsurancePlanID ()->getIterator () );
	echo "ZI147";
	dumpIS ( $obj->getCoverageType ()->getIterator () );
	echo "ZI148";
	dumpIS ( $obj->getHandicap ()->getIterator () );
	echo "ZI149";
	dumpCX ( $obj->getInsuredsIDNumber ()->getIterator () );
	echo "ZI150";
	dumpIS ( $obj->getSignatureCode ()->getIterator () );
	echo "ZI151";
	dumpDT ( $obj->getSignatureCodeDate ()->getIterator () );
	echo "ZI152";
	dumpST ( $obj->getInsuredsBirthPlace ()->getIterator () );
	echo "ZI153";
	dumpIS ( $obj->getVIPIndicator ()->getIterator () );
}