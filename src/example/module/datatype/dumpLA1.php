<?php
function dumpLA1($field) {
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
			echo "\tAddress:" . $field->current ()->getAddress () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}