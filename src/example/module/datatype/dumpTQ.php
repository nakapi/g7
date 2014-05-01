<?php
function dumpTQ($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tQuantity:" . $field->current ()->getQuantity () . "\n";
			echo "\tInterval:" . $field->current ()->getInterval () . "\n";
			echo "\tDuration:" . $field->current ()->getDuration () . "\n";
			echo "\tStart Time:" . $field->current ()->getStartTime () . "\n";
			echo "\tEnd Time:" . $field->current ()->getEndTime () . "\n";
			echo "\tPriority:" . $field->current ()->getPriority () . "\n";
			echo "\tCondition:" . $field->current ()->getCondition () . "\n";
			echo "\tText:" . $field->current ()->getText () . "\n";
			echo "\tConjunction:" . $field->current ()->getConjunction () . "\n";
			echo "\tOrder Sequencing:" . $field->current ()->getOrderSequencing () . "\n";
			echo "\tOccurrence Duration:" . $field->current ()->getOccurrenceDuration () . "\n";
			echo "\tTotal Occurrences:" . $field->current ()->getTotalOccurrences () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}