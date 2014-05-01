<?php
function dumpXON($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tOrganizationName:" . $field->current ()->getOrganizationName () . "\n";
			echo "\tOrganizationNameTypeCode:" . $field->current ()->getOrganizationNameTypeCode () . "\n";
			echo "\tIdNumber:" . $field->current ()->getIdNumber () . "\n";
			echo "\tCheckDigit:" . $field->current ()->getCheckDigit () . "\n";
			echo "\tCheckDigitScheme:" . $field->current ()->getCheckDigitScheme () . "\n";
			echo "\tAssigningAuthority:" . $field->current ()->getAssigningAuthority () . "\n";
			echo "\tIdentifierTypeCode:" . $field->current ()->getIdentifierTypeCode () . "\n";
			echo "\tAssigningFacility:" . $field->current ()->getAssigningFacility () . "\n";
			echo "\tNameRepresentationCode:" . $field->current ()->getNameRepresentationCode () . "\n";
			echo "\tOrganizationIdentifier:" . $field->current ()->getOrganizationIdentifier () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}