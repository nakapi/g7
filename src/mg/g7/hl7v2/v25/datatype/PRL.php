<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_PRL_COMPONENT_MAX", 3 );
	/**
	 * データ型:親結果リンク
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 親検査識別子 LEN: DT:CWE OPT:
	 * SEQ2 親検査副識別子 LEN: DT:ST OPT:
	 * SEQ3 親検査の値の記述 LEN: DT:TX OPT:
	 */
	class PRL extends GenericField {
		private $parentObservationIdentifier; // SEQ1 親検査識別子
		private $parentObservationSubIdentifier; // SEQ2 親検査副識別子
		private $parentObservationValueDescriptor; // SEQ3 親検査の値の記述
		public function parse() {
			parent::validate ();
			$this->parentObservationIdentifier = $this->components [0];
			$this->parentObservationSubIdentifier = $this->components [1];
			$this->parentObservationValueDescriptor = $this->components [2];
		}
		public function getParentObservationIdentifier() {
			return $this->parentObservationIdentifier;
		}
		public function getParentObservationSubIdentifier() {
			return $this->parentObservationSubIdentifier;
		}
		public function getParentObservationValueDescriptor() {
			return $this->parentObservationValueDescriptor;
		}
	}
}
