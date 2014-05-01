<?php
function dumpFC($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tFinancialClassCode:" . $field->current ()->getFinancialClassCode () . "\n";
			echo "\tEffectiveDate:" . $field->current ()->getEffectiveDate () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}