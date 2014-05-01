<?php
function dumpXAD($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tStreet Address:" . $field->current ()->getStreetAddress () . "\n";
			echo "\tOther Designation:" . $field->current ()->getOtherDesignation () . "\n";
			echo "\tCity:" . $field->current ()->getCity () . "\n";
			echo "\tState Or Province:" . $field->current ()->getStateOrProvince () . "\n";
			echo "\tZip Or Postal Code:" . $field->current ()->getZipOrPostalCode () . "\n";
			echo "\tCountry:" . $field->current ()->getCountry () . "\n";
			echo "\tAddress Type:" . $field->current ()->getAddressType () . "\n";
			echo "\tOther Geographic Designation:" . $field->current ()->getOtherGeographicDesignation () . "\n";
			echo "\tCountry Parish Code:" . $field->current ()->getCountyParishCode () . "\n";
			echo "\tCensus Tract:" . $field->current ()->getCensusTract () . "\n";
			echo "\tAddress Representation Code:" . $field->current ()->getAddressRepresentationCode () . "\n";
			echo "\tAddress Validity Range:" . $field->current ()->getAddressValidityRange () . "\n";
			echo "\tEffective Date:" . $field->current ()->getEffectiveDate () . "\n";
			echo "\tExpiration Date:" . $field->current ()->getExpirationDate () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}