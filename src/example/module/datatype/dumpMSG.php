<?php
function dumpMSG($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tMessage Code :" . $field->current ()->getMessageCode () . "\n";
			echo "\tTrigger Event :" . $field->current ()->getTriggerEvent () . "\n";
			echo "\tMessage Structure :" . $field->current ()->getMessageStructure () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}