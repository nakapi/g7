<?php
function dumpPT($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\tProcessing ID :" . $field->current ()->getProcessingId () . "\t(D:デバッグ P:本系 T:練習)\n";
			echo "\tProcessing Mode :" . $field->current ()->getProcessingMode () . "\t(A:記録 R:記録からの復帰 I:初期導入 T:現在処理中 Not present:提示されない)\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}