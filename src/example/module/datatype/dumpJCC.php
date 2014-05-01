<?php
function dumpJCC($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tJobCode:" . $field->current ()->getJobCode () . "\n";
			echo "\tJobClass:" . $field->current ()->getJobClass () . "\n";
			echo "\tJobDescriptionText:" . $field->current ()->getJobDescriptionText () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}