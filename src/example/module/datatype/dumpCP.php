<?php
function dumpCP($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tPrice:" . $field->current ()->getPrice () . "\n";
			echo "\tPriceType:" . $field->current ()->getPriceType () . "\n";
			echo "\tFromValue:" . $field->current ()->getFromValue () . "\n";
			echo "\tToValue:" . $field->current ()->getToValue () . "\n";
			echo "\tRangeUnits:" . $field->current ()->getRangeUnits () . "\n";
			echo "\tRangeType:" . $field->current ()->getRangeType () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}