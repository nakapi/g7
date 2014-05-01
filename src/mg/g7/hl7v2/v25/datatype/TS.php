<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;
	use mg\g7\Exception;

	define ( "V25_DT_TS_COMPONENT_MAX", 2 );
	/**
	 * データ型:タイムスタンプ
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 時刻 LEN:24 DT:DTM OPT:R
	 * SEQ2 精度 LEN:1 DT:ID OPT:B
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 時刻 LEN: DT: OPT:
	 * SEQ2 精度 LEN: DT: OPT:
	 * 
	 *        
	 */
	class TS extends GenericField {
		private $time; // SEQ1 時刻
		private $degreeOfPrecision; // SEQ2 精度
		public function parse() {
			parent::validate ();
			if (strstr ( $this->components [0], "." )) {
				$this->time = date_create_from_format ( "YmdGis.u|", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 4) {
				$this->time = date_create_from_format ( "Y", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 6) {
				$this->time = date_create_from_format ( "Ym", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 8) {
				$this->time = date_create_from_format ( "Ymd|", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 10) {
				$this->time = date_create_from_format ( "YmdG", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 12) {
				$this->time = date_create_from_format ( "YmdGi", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 14) {
				$this->time = date_create_from_format ( "YmdGis", $this->components [0] );
			}
			$this->degreeOfPrecision = $this->components [1];
		}
		public function getTime() {
			if ($this->time) {
				return date_format ( $this->time, "Y-m-d G:i:s.u" );
			}
		}
	}
}