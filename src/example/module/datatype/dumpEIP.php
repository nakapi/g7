<?php
function dumpEIP($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tPlacerAssignedIdentifier:" . $field->current ()->getPlacerAssignedIdentifier () . "\n";
			echo "\tFillerAssignedIdentifier:" . $field->current ()->getFillerAssignedIdentifier () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}