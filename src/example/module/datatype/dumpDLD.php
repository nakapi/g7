<?php
function dumpDLD($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tDischargeLocation:" . $field->current ()->getDischargeLocation () . "\n";
			echo "\tEffectiveDate:" . $field->current ()->getEffectiveDate () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}