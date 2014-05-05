<?php
function dumpSPS($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tSpecimenSourceNameOrCode:" . $field->current ()->getSpecimenSourceNameOrCode () . "\n";
			echo "\tAdditives:" . $field->current ()->getAdditives () . "\n";
			echo "\tSpecimenCollectionMethod:" . $field->current ()->getSpecimenCollectionMethod () . "\n";
			echo "\tBodySite:" . $field->current ()->getBodySite () . "\n";
			echo "\tSiteModifier:" . $field->current ()->getSiteModifier () . "\n";
			echo "\tCollectionMethodModifierCode:" . $field->current ()->getCollectionMethodModifierCode () . "\n";
			echo "\tSpecimenRole:" . $field->current ()->getSpecimenRole () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}