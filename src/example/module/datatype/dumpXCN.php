<?php
function dumpXCN($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tIdNumber:" . $field->current ()->getIdNumber () . "\n";
			echo "\tFamilyName:" . $field->current ()->getFamilyName () . "\n";
			echo "\tGivenName:" . $field->current ()->getGivenName () . "\n";
			echo "\tSecondAndFurtherGivenNamesOfInitialsThreof:" . $field->current ()->getSecondAndFurtherGivenNamesOfInitialsThreof () . "\n";
			echo "\tSuffix:" . $field->current ()->getSuffix () . "\n";
			echo "\tPrefix:" . $field->current ()->getPrefix () . "\n";
			echo "\tDegree:" . $field->current ()->getDegree () . "\n";
			echo "\tSourceTable:" . $field->current ()->getSourceTable () . "\n";
			echo "\tAssigningAuthority:" . $field->current ()->getAssigningAuthority () . "\n";
			echo "\tNameTypeCode:" . $field->current ()->getNameTypeCode () . "\n";
			echo "\tIdentifierCheckDigit:" . $field->current ()->getIdentifierCheckDigit () . "\n";
			echo "\tCheckDigitScheme:" . $field->current ()->getCheckDigitScheme () . "\n";
			echo "\tIdentifierTypeCode:" . $field->current ()->getIdentifierTypeCode () . "\n";
			echo "\tAssigningFacility:" . $field->current ()->getAssigningFacility () . "\n";
			echo "\tNameRepresentationCode:" . $field->current ()->getNameRepresentationCode () . "\n";
			echo "\tNameContext:" . $field->current ()->getNameContext () . "\n";
			echo "\tNameValidityRange:" . $field->current ()->getNameValidityRange () . "\n";
			echo "\tNameAssemblyOrder:" . $field->current ()->getNameAssemblyOrder () . "\n";
			echo "\tEffectiveDate:" . $field->current ()->getEffectiveDate () . "\n";
			echo "\tExpirationDate:" . $field->current ()->getExpirationDate () . "\n";
			echo "\tProfessionalSuffix:" . $field->current ()->getProfessionalSuffix () . "\n";
			echo "\tAssigningJurisdiction:" . $field->current ()->getAssigningJurisdiction () . "\n";
			echo "\tAssigningAgencyOfDepartment:" . $field->current ()->getAssigningAgencyOfDepartment () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}