<?php
function dumpAUI($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tAuthorizationNumber:" . $field->current ()->getAuthorizationNumber () . "\n";
			echo "\tDate:" . $field->current ()->getDate () . "\n";
			echo "\tSource:" . $field->current ()->getSource () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}