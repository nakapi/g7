<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	/**
	 * データ型:アドレス変化1を備えた位置
	 * 未使用
	 * JAHIS 注射データ交換規約Ver1.0
	 * SEQ1 ケアの場所 LEN: DT:IS OPT:
	 * SEQ2 病室 LEN: DT:IS OPT:
	 * SEQ3 病床 LEN: DT:IS OPT:
	 * SEQ4 施設 LEN: DT:HD OPT:
	 * SEQ5 位置の状態 LEN: DT:IS OPT:
	 * SEQ6 患者の位置タイプ LEN: DT:IS OPT:
	 * SEQ7 建物 LEN: DT:IS OPT:
	 * SEQ8 階 LEN: DT:IS OPT:
	 * SEQ9 住所 LEN: DT:AD OPT:
	 * 
	 *        
	 */
	class LA1 extends GenericField {
		private $pointOfCare; // SEQ1 ケアの場所
		private $room; // SEQ2 病室
		private $bed; // SEQ3 病床
		private $facility; // SEQ4 施設
		private $locationStatus; // SEQ5 位置の状態
		private $patientLocationType; // SEQ6 患者の位置タイプ
		private $building; // SEQ7 建物
		private $floor; // SEQ8 階
		private $address; // SEQ9 住所
		public function parse() {
			parent::validate ();
			$this->pointOfCare = $this->components[0];
			$this->room = $this->components[1];
			$this->bed = $this->components[2];
			$this->facility = $this->components[3];
			$this->locationStatus = $this->components[4];
			$this->patientLocationType = $this->components[5];
			$this->building = $this->components[6];
			$this->floor = $this->components[7];
			$this->address = $this->components[8];
		}
		public function getPointOfCare(){
			return $this->pointOfCare;
		}
		public function getRoom(){
			return $this->room;
		}
		public function getBed(){
			return $this->bed;
		}
		public function getFacility(){
			return $this->facility;
		}
		public function getLocationStatus(){
			return $this->locationStatus;
		}
		public function getPatientLocationType(){
			return $this->patientLocationType;
		}
		public function getBuilding(){
			return $this->building;
		}
		public function getFloor(){
			return $this->floor;
		}
		public function getAddress(){
			return $this->address;
		}
	}
}