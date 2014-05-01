<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_DT_COMPONENT_MAX", 1 );
	define ( "V25_DT_DT_LENGTH_MAX", 8 );
	/**
	 * データ型:日付
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * 日付 LEN:8 DT: OPT:
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * 日付 LEN:8 DT: OPT:
	 *
	 * HL7 Ver2.5
	 * 日付 LEN:8
	 * 
	 */
	class DT extends GenericField {
		private $date; // 日付
		public function parse() {
			parent::validate ();
			if (strlen ( $this->components [0] ) === 6) {
				$this->date = date_create_from_format ( "Ym", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 8) {
				$this->date = date_create_from_format ( "Ymd|", $this->components [0] );
			}
		}
		public function getDate() {
			if ($this->date) {
				if (strlen ( $this->fieldStr ) === 6) {
					return date_format ( $this->date, "Y-m" );
				} else if (strlen ( $this->fieldStr  ) === 8) {
					return date_format ( $this->date, "Y-m-d" );
				}
			}
		}
	}
}