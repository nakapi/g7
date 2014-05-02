<?php
function dumpLA2($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tPointOfCare:" . $field->current ()->getPointOfCare () . "\n";
			echo "\tRoom:" . $field->current ()->getRoom () . "\n";
			echo "\tBed:" . $field->current ()->getBed () . "\n";
			echo "\tFacility:" . $field->current ()->getFacility () . "\n";
			echo "\tLocationStatus:" . $field->current ()->getLocationStatus () . "\n";
			echo "\tPatientLocationType:" . $field->current ()->getPatientLocationType () . "\n";
			echo "\tBuilding:" . $field->current ()->getBuilding () . "\n";
			echo "\tFloor:" . $field->current ()->getFloor () . "\n";
			echo "\tStreetAddress:" . $field->current ()->getStreetAddress () . "\n";
			echo "\tOtherDesignation:" . $field->current ()->getOtherDesignation () . "\n";
			echo "\tCity:" . $field->current ()->getCity () . "\n";
			echo "\tStateOfProvince:" . $field->current ()->getStateOfProvince () . "\n";
			echo "\tZipOrPostalCode:" . $field->current ()->getZipOrPostalCode () . "\n";
			echo "\tCountry:" . $field->current ()->getCountry () . "\n";
			echo "\tAddressType:" . $field->current ()->getAddressType () . "\n";
			echo "\tOtherGeographicDesignation:" . $field->current ()->getOtherGeographicDesignation () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}