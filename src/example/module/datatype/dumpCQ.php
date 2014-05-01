<?php
function dumpCQ($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tQuantity:" . $field->current ()->getQuantity () . "\n";
			echo "\tUnits:" . $field->current ()->getUnits () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}