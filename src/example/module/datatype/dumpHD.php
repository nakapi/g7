<?php
function dumpHD($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tNamespace ID:" . $field->current ()->getNamespaceId () . "\n";
			echo "\tUniversal ID:" . $field->current ()->getUniversalId () . "\n";
			echo "\tUniversal Type:" . $field->current ()->getUniversalIdType () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}