<?php
function dumpCNE($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tIdentifier:" . $field->current ()->getIdentifier () . "\n";
			echo "\tText:" . $field->current ()->getText () . "\n";
			echo "\tName Of Coding System:" . $field->current ()->getNameOfCodingSystem () . "\n";
			echo "\tAlternate Identifier:" . $field->current ()->getAlternateIdentifier () . "\n";
			echo "\tAlternate Text:" . $field->current ()->getAlternateText () . "\n";
			echo "\tName of Alternate Coding System:" . $field->current ()->getNameOfAlternateCodingSystem () . "\n";
			echo "\tCoding System Version ID:" . $field->current ()->getCodingSystemVersionId () . "\n";
			echo "\tAlternate Coding System Version ID:" . $field->current ()->getAlternateCodingSystemVersionId () . "\n";
			echo "\tOriginal Text:" . $field->current ()->getOriginalText () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}