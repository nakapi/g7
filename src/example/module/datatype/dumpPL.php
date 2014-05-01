<?php
function dumpPL($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tPointOfCare:" . $field->current ()->getPointOfCare () . "\n";
			echo "\tRoom:" . $field->current ()->getRoom () . "\n";
			echo "\tBed:" . $field->current ()->getBed () . "\n";
			echo "\tFacility:" . $field->current ()->getFacility () . "\n";
			echo "\tLocationStatus:" . $field->current ()->getLocationStatus () . "\n";
			echo "\tPersonLocationType:" . $field->current ()->getPersonLocationType () . "\n";
			echo "\tBuilding:" . $field->current ()->getBuilding () . "\n";
			echo "\tFloor:" . $field->current ()->getFloor () . "\n";
			echo "\tLocationDescription:" . $field->current ()->getLocationDescription () . "\n";
			echo "\tComprehensiveLocationIdentifier:" . $field->current ()->getComprehensiveLocationIdentifier () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}