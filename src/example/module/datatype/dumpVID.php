<?php
function dumpVID($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tVersion ID :" . $field->current ()->getVersionId () . "\n";
			echo "\tInternationalization Code :" . $field->current ()->getInternationalizationCode () . "\n";
			echo "\tInternational Version ID :" . $field->current ()->getInternationalVersionId () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}