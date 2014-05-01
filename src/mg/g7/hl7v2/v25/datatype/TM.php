<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;
	use mg\g7\Exception;

	define ( "V25_DT_TM_COMPONENT_MAX", 2 );
	/**
	 * データ型:タイムスタンプ
	 * HL7 Ver2.5
	 * SEQ1 時刻 LEN:24 DT:DTM OPT:R
	 *
	 *        
	 */
	class TM extends GenericField {
		private $time; // SEQ1 時刻
		public function parse() {
			parent::validate ();
			if (strstr ( $this->components [0], "." )) {
				$this->time = date_create_from_format ( "Gis.u|", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 2) {
				$this->time = date_create_from_format ( "G", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 4) {
				$this->time = date_create_from_format ( "Gi", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 6) {
				$this->time = date_create_from_format ( "Gis", $this->components [0] );
			}
		}
		public function getTime() {
			if ($this->time) {
				return date_format ( $this->time, "G:i:s.u" );
			}
		}
	}
}