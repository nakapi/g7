<?php
function dumpCX($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tId Number:" . $field->current ()->getIdNumber () . "\n";
			echo "\tCheck Digit:" . $field->current ()->getCheckDigit () . "\n";
			echo "\tCheck Digit Scheme:" . $field->current ()->getCheckDigitScheme () . "\n";
			echo "\tAssigning Authority:" . $field->current ()->getAssigningAuthority () . "\n";
			echo "\tIdentifier Type Code:" . $field->current ()->getIdentifierTypeCode () . "\n";
			echo "\tAssigning Facility:" . $field->current ()->getAssigningFacility () . "\n";
			echo "\tEffective Date:" . $field->current ()->getEffectiveDate () . "\n";
			echo "\tExpiration Date:" . $field->current ()->getExpirationDate () . "\n";
			echo "\tAssigning Jurisdiction:" . $field->current ()->getAssigningJurisdiction () . "\n";
			echo "\tAssigning Agency Or Department:" . $field->current ()->getAssigningAgencyOrDepartment () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}