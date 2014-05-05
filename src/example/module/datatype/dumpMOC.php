<?php
function dumpMOC($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tMonetaryAmount:" . $field->current ()->getMonetaryAmount () . "\n";
			echo "\tChargeCode:" . $field->current ()->getChargeCode () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}