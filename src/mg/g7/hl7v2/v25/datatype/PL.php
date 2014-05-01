<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_PL_COMPONENT_MAX", 11 );
	/**
	 * データ型:所在場所
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 ケアの場所 LEN:20 DT:IS OPT:O
	 * SEQ2 病室 LEN:20 DT:IS OPT:O
	 * SEQ3 病床 LEN:20 DT:IS OPT:O
	 * SEQ4 施設 LEN:227 DT:HD OPT:O
	 * SEQ5 場所の状態 LEN:20 DT:IS OPT:O
	 * SEQ6 所在場所型 LEN:20 DT:IS OPT:C
	 * SEQ7 建物 LEN:20 DT:IS OPT:O
	 * SEQ8 階 LEN:20 DT:IS OPT:O
	 * SEQ9 場所の詳細 LEN:199 DT:ST OPT:O
	 * SEQ10 包括的な場所識別子 LEN:427 DT:EI OPT:O
	 * SEQ11 場所についての割当権限者 LEN:227 DT:HD OPT:O
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 看護単位 LEN:20 DT:IS OPT:O
	 * SEQ2 病室 LEN:20 DT:IS OPT:O
	 * SEQ3 ベッド LEN:20 DT:IS OPT:O
	 * SEQ4 施設 LEN:227 DT:HD OPT:O
	 * SEQ5 場所の状態 LEN:20 DT:IS OPT:O
	 * SEQ6 所在場所タイプ LEN:20 DT:IS OPT:C
	 * SEQ7 建物 LEN:20 DT:IS OPT:O
	 * SEQ8 階 LEN:20 DT:IS OPT:O
	 * SEQ9 場所の詳細 LEN:199 DT:ST OPT:O
	 * 
	 *        
	 */
	class PL extends GenericField {
		private $pointOfCare; // SEQ1 ケアの場所
		private $room; // SEQ2 病室
		private $bed; // SEQ3 病床
		private $facility; // SEQ4 施設
		private $locationStatus; // SEQ5 場所の状態
		private $personLocationType; // SEQ6 所在場所型
		private $building; // SEQ7 建物
		private $floor; // SEQ8 階
		private $locationDescription; // SEQ9 場所の詳細
		private $comprehensiveLocationIdentifier; // SEQ10 包括的な場所識別子
		private $assigningAuthorityForLocation; // SEQ11 場所についての割当権限者
		public function parse() {
			parent::validate ();
			$this->pointOfCare = $this->components [0];
			$this->room = $this->components [1];
			$this->bed = $this->components [2];
			$this->facility = $this->components [3];
			$this->locationStatus = $this->components [4];
			$this->personLocationType = $this->components [5];
			$this->building = $this->components [6];
			$this->floor = $this->components [7];
			$this->locationDescription = $this->components [8];
			$this->comprehensiveLocationIdentifier = $this->components [9];
			$this->assigningAuthorityForLocation = $this->components [10];
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
		public function getPersonLocationType() {
			return $this->personLocationType;
		}
		public function getBuilding() {
			return $this->building;
		}
		public function getFloor() {
			return $this->floor;
		}
		public function getLocationDescription() {
			return $this->locationDescription;
		}
		public function getComprehensiveLocationIdentifier() {
			return $this->comprehensiveLocationIdentifier;
		}
	}
}