<?php
function dumpZRD($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tIdentifier:" . $field->current ()->getIdentifier () . "\n";
			echo "\tText:" . $field->current ()->getText () . "\n";
			echo "\tName Of Encoding System:" . $field->current ()->getNameOfEncodingSystem () . "\n";
			echo "\tQuantity:" . $field->current ()->getQuantity () . "\n";
			echo "\tUnit:" . $field->current ()->getUnit () . "\n";
			echo "\tFilmPartitionNumber:" . $field->current ()->getFilmPartitionNumber () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}