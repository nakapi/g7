<?php
function dumpXPN($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tFamily Name:" . $field->current ()->getFamilyName () . "\n";
			echo "\tGiven Name:" . $field->current ()->getGivenName () . "\n";
			echo "\tSecond And Further GivenName Or Initials Threof:" . $field->current ()->getSecondAndFurtherGivenNamesOrInitialsThereof () . "\n";
			echo "\tSuffix:" . $field->current ()->getSuffix () . "\n";
			echo "\tPrefix:" . $field->current ()->getPrefix () . "\n";
			echo "\tDegree:" . $field->current ()->getDegree () . "\n";
			echo "\tName Type Code:" . $field->current ()->getNameTypeCode () . "\n";
			echo "\tName Representation Code:" . $field->current ()->getNameRepresentationCode () . "\n";
			echo "\tName Context:" . $field->current ()->getNameContext () . "\n";
			echo "\tName Validity Range:" . $field->current ()->getNameValidityRange () . "\n";
			echo "\tName Assembly Orde:" . $field->current ()->getNameAssemblyOrder () . "\n";
			echo "\tEffective Date:" . $field->current ()->getEffectiveDate () . "\n";
			echo "\tExpiration Date:" . $field->current ()->getExpirationDate () . "\n";
			echo "\tProfessional Suffix:" . $field->current ()->getProfessionalSuffix () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}