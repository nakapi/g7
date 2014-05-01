<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_PRT_COMPONENT_MAX", 2 );
	/**
	 * データ型:繰り返しパターン
	 * HL7 Ver2.5
	 * SEQ1 繰返しパターンコード LEN:705 DT:CWE OPRT:R
	 * SEQ2 カレンダー上の位置 LEN:2 DT:ID OPRT:O
	 * SEQ3 フェーズ範囲開始値 LEN:10 DT:NM OPRT:O
	 * SEQ4 フェーズ範囲終了値 LEN:10 DT:NM OPRT:O
	 * SEQ5 期間数値 LEN:10 DT:NM OPRT:O
	 * SEQ6 期間単位 LEN:10 DT:IS OPRT:C
	 * SEQ7 施設設定の時刻 LEN:1 DT:ID OPRT:O
	 * SEQ8 イベント LEN:6 DT:ID OPRT:O
	 * SEQ9 イベントオフセット数値 LEN:10 DT:NM OPRT:O
	 * SEQ10 イベントオフセット単位 LEN:10 DT:IS OPRT:C
	 * SEQ11 汎用タイミング指定 LEN:200 DT:GTS OPRT:O
	 *
	 *        
	 */
	class RPT extends GenericField {
		private $repeatPatternCode; // SEQ1 繰返しパターンコード
		private $calendarAlignment ; // SEQ2 カレンダー上の位置
		private $phaseRangeBeginValue ; // SEQ3 フェーズ範囲開始値
		private $phaseRangeEndValue ; // SEQ4 フェーズ範囲終了値
		private $periodQuantity ; // SEQ5 期間数値
		private $periodUnits ; // SEQ6 期間単位
		private $institutionSpecifiedTime ; // SEQ7 施設設定の時刻
		private $event ; // SEQ8 イベント
		private $eventOffsetQuantity ; // SEQ9 イベントオフセット数値
		private $eventOffsetUnits ; // SEQ10 イベントオフセット単位
		private $generalTimingSpecification ; // SEQ11 汎用タイミング指定
		public function parse() {
			parent::validate ();
			$this->repeatPatternCode = $this->components [0];
			$this->calendarAlignment = $this->components [1];
			$this->phaseRangeBeginValue = $this->components [2];
			$this->phaseRangeEndValue = $this->components [3];
			$this->periodQuantity = $this->components [4];
			$this->periodUnits = $this->components [5];
			$this->institutionSpecifiedTime = $this->components [6];
			$this->event = $this->components [7];
			$this->eventOffsetQuantity = $this->components [8];
			$this->eventOffsetUnits = $this->components [9];
			$this->generalTimingSpecification = $this->components [10];
		}
		public function getRepeatPatternCode() {
			return $this->repeatPatternCode;
		}
		public function getCalendarAlignment() {
			return $this->calendarAlignment;
		}
		public function getPhaseRangeBeginValue() {
			return $this->phaseRangeBeginValue;
		}
		public function getPhaseRangeEndValue() {
			return $this->phaseRangeEndValue;
		}
		public function getPeriodQuantity() {
			return $this->periodQuantity;
		}
		public function getPeriodUnits() {
			return $this->periodUnits;
		}
		public function getInstitutionSpecifiedTime() {
			return $this->institutionSpecifiedTime;
		}
		public function getEvent() {
			return $this->event;
		}
		public function getEventOffsetQuantity() {
			return $this->eventOffsetQuantity;
		}
		public function getEventOffsetUnits() {
			return $this->eventOffsetUnits;
		}
		public function getGeneralTimingSpecification() {
			return $this->generalTimingSpecification;
		}
	}
}
