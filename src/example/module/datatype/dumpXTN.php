<?php
function dumpXTN($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tTelephoneNumber:" . $field->current ()->getTelephoneNumber () . "\n";
			echo "\tTelecommunicationUseCode:" . $field->current ()->getTelecommunicationUseCode () . "\n";
			echo "\tTelecommunicationEquipmentType:" . $field->current ()->getTelecommunicationEquipmentType () . "\n";
			echo "\tEmailAddress:" . $field->current ()->getEmailAddress () . "\n";
			echo "\tCountryCode:" . $field->current ()->getCountryCode () . "\n";
			echo "\tAreaCityCode:" . $field->current ()->getAreaCityCode () . "\n";
			echo "\tLocalNumber:" . $field->current ()->getLocalNumber () . "\n";
			echo "\tExtension:" . $field->current ()->getExtension () . "\n";
			echo "\tAnyText:" . $field->current ()->getAnyText () . "\n";
			echo "\tExtensionPrefix:" . $field->current ()->getExtensionPrefix () . "\n";
			echo "\tSpeedDialCode:" . $field->current ()->getSpeedDialCode () . "\n";
			echo "\tUnformattedTelephoneNumber:" . $field->current ()->getUnformattedTelephoneNumber () . "\n";
		}else{
			echo "\n";
		}
		$field->next ();
	}
}