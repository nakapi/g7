<?php
function dumpEI($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tEntity Identifier:" . $field->current ()->getEntityIdentifier () . "\n";
			echo "\tNamespace ID:" . $field->current ()->getNamespaceId () . "\n";
			echo "\tUniversal ID:" . $field->current ()->getUniversalId () . "\n";
			echo "\tUniversal ID Type:" . $field->current ()->getUniversalIdType () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}