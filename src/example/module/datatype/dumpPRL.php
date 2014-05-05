<?php
function dumpPRL($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tParentObservationIdentifier:" . $field->current ()->getParentObservationIdentifier () . "\n";
			echo "\tParentObservationSubIdentifier:" . $field->current ()->getParentObservationSubIdentifier () . "\n";
			echo "\tParentObservationValueDescriptor:" . $field->current ()->getParentObservationValueDescriptor () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}