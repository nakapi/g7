<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;
	use mg\g7\Exception;

	define ( "V25_DT_DR_COMPONENT_MAX", 2 );
	/**
	 * データ型:日付／時間の範囲
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 開始日付・時刻 LEN: DT:TS OPT:
	 * SEQ2 終了日付・時刻 LEN: DT:TS OPT:
	 */
	class DR extends GenericField {
		private $rangeStartTIme; // SEQ1 開始日付・時刻
		private $rangeEndTIme; // SEQ2 終了日付・時刻
		public function parse() {
			parent::validate ();
			if (strstr ( $this->components [0], "." )) {
				$this->rangeStartTIme = date_create_from_format ( "YmdGis.u|", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 4) {
				$this->rangeStartTIme = date_create_from_format ( "Y", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 6) {
				$this->rangeStartTIme = date_create_from_format ( "Ym", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 8) {
				$this->rangeStartTIme = date_create_from_format ( "Ymd|", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 10) {
				$this->rangeStartTIme = date_create_from_format ( "YmdG", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 12) {
				$this->rangeStartTIme = date_create_from_format ( "YmdGi", $this->components [0] );
			} else if (strlen ( $this->components [0] ) === 14) {
				$this->rangeStartTIme = date_create_from_format ( "YmdGis", $this->components [0] );
			}
			if (strstr ( $this->components [1], "." )) {
				$this->rangeEndTIme = date_create_from_format ( "YmdGis.u|", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 4) {
				$this->rangeEndTIme = date_create_from_format ( "Y", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 6) {
				$this->rangeEndTIme = date_create_from_format ( "Ym", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 8) {
				$this->rangeEndTIme = date_create_from_format ( "Ymd|", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 10) {
				$this->rangeEndTIme = date_create_from_format ( "YmdG", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 12) {
				$this->rangeEndTIme = date_create_from_format ( "YmdGi", $this->components [1] );
			} else if (strlen ( $this->components [1] ) === 14) {
				$this->rangeEndTIme = date_create_from_format ( "YmdGis", $this->components [1] );
			}
		}
		public function getRangeStartTime() {
			if ($this->rangeStartTIme) {
				return date_format ( $this->rangeStartTIme, "Y-m-d G:i:s.u" );
			}
		}
		public function getRangeEndTime() {
			if ($this->rangeEndTIme) {
				return date_format ( $this->rangeEndTIme, "Y-m-d G:i:s.u" );
			}
		}
	}
}