<?php
function dumpID($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getCodedValueForUserDefinedTables () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}