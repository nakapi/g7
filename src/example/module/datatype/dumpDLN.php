<?php
function dumpDLN($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tLicenseNumber:" . $field->current ()->getLicenseNumber () . "\n";
			echo "\tIssuingStateProvinceCountry:" . $field->current ()->getIssuingStateProvinceCountry () . "\n";
			echo "\tExpirationDate:" . $field->current ()->getExpirationDate () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}