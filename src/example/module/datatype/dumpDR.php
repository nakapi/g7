<?php
function dumpDR($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tRangeStartTime:" . $field->current ()->getRangeStartTime () . "\n";
			echo "\tRangeEndTime:" . $field->current ()->getRangeEndTime () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}