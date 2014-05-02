<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	/**
	 * データ型:住所を含む位置、形式2
	 * 未使用
	 * HL7 Ver2.5
	 * SEQ1 ケアの場所 LEN: DT:IS OPT:
	 * SEQ2 病室 LEN: DT:IS OPT:
	 * SEQ3 病床 LEN: DT:IS OPT:
	 * SEQ4 施設 LEN: DT:HD OPT:
	 * SEQ5 位置の状態 LEN: DT:IS OPT:
	 * SEQ6 患者の位置タイプ LEN: DT:IS OPT:
	 * SEQ7 建物 LEN: DT:IS OPT:
	 * SEQ8 階 LEN: DT:IS OPT:
	 * SEQ9 通りの住所 LEN: DT:ST OPT:
	 * SEQ10 その他表示 LEN: DT:ST OPT:
	 * SEQ11 市 LEN: DT:ST OPT:
	 * SEQ12 州 LEN: DT:ST OPT:
	 * SEQ13 ジップコードまたは郵便番号 LEN: DT:ST OPT:
	 * SEQ14 国 LEN: DT:ID OPT:
	 * SEQ15 住所タイプ LEN: DT:ID OPT:
	 * SEQ16 その他の地理表示 LEN: DT:ST OPT:
	 * 
	 *        
	 */
	class LA2 extends GenericField {
		private $pointOfCare; // SEQ1 ケアの場所
		private $room; // SEQ2 病室
		private $bed; // SEQ3 病床
		private $facility; // SEQ4 施設
		private $locationStatus; // SEQ5 位置の状態
		private $patientLocationType; // SEQ6 患者の位置タイプ
		private $building; // SEQ7 建物
		private $floor; // SEQ8 階
		private $streetAddress; // SEQ9 通りの住所
		private $otherDesignation; // SEQ10 その他表示 
		private $city; // SEQ11 市
		private $stateOfProvince; // SEQ12 州
		private $zipOrPostalCode; // SEQ13 ジップコードまたは郵便番号
		private $country; // SEQ14 国
		private $addressType; // SEQ15 住所タイプ
		private $otherGeographicDesignation; // SEQ16 その他の地理表示
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
			$this->streetAddress = $this->components[8];
			$this->otherDesignation = $this->components[9];
			$this->city = $this->components[10];
			$this->stateOfProvince = $this->components[11];
			$this->zipOrPostalCode = $this->components[12];
			$this->country = $this->components[13];
			$this->addressType = $this->components[14];
			$this->otherGeographicDesignation = $this->components[15];
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
		public function getStreetAddress(){
			return $this->streetAddress;
		}
		public function getOtherDesignation(){
			return $this->otherDesignation;
		}
		public function getCity(){
			return $this->city;
		}
		public function getStateOfProvince(){
			return $this->stateOfProvince;
		}
		public function getZipOrPostalCode(){
			return $this->zipOrPostalCode;
		}
		public function getCountry(){
			return $this->country;
		}
		public function getAddressType(){
			return $this->addressType;
		}
		public function getOtherGeographicDesignation(){
			return $this->otherGeographicDesignation;
		}
	}
}