<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_NDL_COMPONENT_MAX", 11 );
	/**
	 * データ型:日付と場所を伴う名前
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 名前 LEN: DT:CNN OPT:
	 * SEQ2 開始日付／時間 LEN: DT:TS OPT:
	 * SEQ3 終了日付／時間 LEN: DT:TS OPT:
	 * SEQ4 ケアの場所 LEN: DT:IS OPT:
	 * SEQ5 病室 LEN: DT:IS OPT:
	 * SEQ6 病床 LEN: DT:IS OPT:
	 * SEQ7 施設 LEN: DT:HD OPT:
	 * SEQ8 場所の状態 LEN: DT:IS OPT:
	 * SEQ9 患者場所型 LEN: DT:IS OPT:
	 * SEQ10 建物 LEN: DT:IS OPT:
	 * SEQ11 階 LEN: DT:IS OPT:
	 */
	class NDL extends GenericField {
		private $name; // SEQ1 名前
		private $startTime; // SEQ2 開始日付／時間
		private $endTime; // SEQ3 終了日付／時間
		private $pointOfCare; // SEQ4 ケアの場所
		private $room; // SEQ5 病室
		private $bed; // SEQ6 病床
		private $facility; // SEQ7 施設
		private $locationStatus; // SEQ8 場所の状態
		private $patientLocationType; // SEQ9 患者場所型
		private $building; // SEQ10 建物
		private $floor; // SEQ11 階
		public function parse() {
			parent::validate ();
			$this->name = $this->components [0];
			$this->startTime = $this->components [1];
			$this->endTime = $this->components [2];
			$this->pointOfCare = $this->components [3];
			$this->room = $this->components [4];
			$this->bed = $this->components [5];
			$this->facility = $this->components [6];
			$this->locationStatus = $this->components [7];
			$this->patientLocationType = $this->components [8];
			$this->building = $this->components [9];
			$this->floor = $this->components [10];
		}
		public function getName() {
			return $this->name;
		}
		public function getStartTime() {
			return $this->startTime;
		}
		public function getEndTime() {
			return $this->endTime;
		}
		public function getPointOfCare() {
			return $this->pointOfCare;
		}
		public function getRoom() {
			return $this->room;
		}
		public function getBed() {
			return $this->bed;
		}
		public function getFacility() {
			return $this->facility;
		}
		public function getLocationStatus() {
			return $this->locationStatus;
		}
		public function getPatientLocationType() {
			return $this->patientLocationType;
		}
		public function getBuilding() {
			return $this->building;
		}
		public function getFloor() {
			return $this->floor;
		}
	}
}
