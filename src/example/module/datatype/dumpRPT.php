<?php
function dumpRPT($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tRepeatPatternCode :" . $field->current ()->getRepeatPatternCode () . "\n";
			echo "\tCalendarAlignment :" . $field->current ()->getCalendarAlignment () . "\n";
			echo "\tPhaseRangeBeginValue :" . $field->current ()->getPhaseRangeBeginValue () . "\n";
			echo "\tPhaseRangeEndValue :" . $field->current ()->getPhaseRangeEndValue () . "\n";
			echo "\tPeriodQuantity:" . $field->current ()->getPeriodQuantity () . "\n";
			echo "\tPeriodUnits:" . $field->current ()->getPeriodUnits () . "\n";
			echo "\tInstitutionSpecifiedTime:" . $field->current ()->getInstitutionSpecifiedTime () . "\n";
			echo "\tEvent:" . $field->current ()->getEvent () . "\n";
			echo "\tEventOffsetQuantity" . $field->current ()->getEventOffsetQuantity () . "\n";
			echo "\tEventOffsetUnits :" . $field->current ()->getEventOffsetUnits () . "\n";
			echo "\tGeneralTimingSpecification:" . $field->current ()->getGeneralTimingSpecification () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}