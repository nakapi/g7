<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_XAD_COMPONENT_MAX", 14 );
	/**
	 * データ型:拡張住所
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 通りの住所 LEN:184 DT:SAD OPT:O
	 * SEQ2 その他表示 LEN:120 DT:ST OPT:O
	 * SEQ3 市 LEN:50 DT:ST OPT:O
	 * SEQ4 州または省 LEN:50 DT:ST OPT:O
	 * SEQ5 ZIPコードまたは郵便番号 LEN:12 DT:ST OPT:O
	 * SEQ6 国 LEN:3 DT:ID OPT:O
	 * SEQ7 住所型 LEN:3 DT:ID OPT:O
	 * SEQ8 その他の地理表示 LEN:50 DT:ST OPT:O
	 * SEQ9 郡コード LEN:20 DT:IS OPT:O
	 * SEQ10 国勢調査区域 LEN:20 DT:IS OPT:O
	 * SEQ11 住所表記コード LEN:1 DT:ID OPT:O
	 * SEQ12 住所有効範囲 LEN:53 DT:DR OPT:O
	 * SEQ13 発行日付 LEN:26 DT:TS OPT:O
	 * SEQ14 失効日付 LEN:26 DT:TS OPT:O
	 *
	 * JAHIS 病名情報データ交換規約
	 * SEQ1 町名 LEN: DT:SAD OPT:
	 * SEQ2 他の表示 LEN: DT:ST OPT:
	 * SEQ3 都市 LEN: DT:ST OPT:
	 * SEQ4 州あるいはプロビンス LEN: DT:ST OPT:
	 * SEQ5 ZIPまたは郵便番号 LEN: DT:ST OPT:
	 * SEQ6 国 LEN: DT:ID OPT:
	 * SEQ7 address type LEN: DT:ID OPT:
	 * SEQ8 他の地理的な表示 LEN: DT:ST OPT:
	 * SEQ9 郡/教区コード LEN: DT:IS OPT:
	 * SEQ10 国勢調査標準区域 LEN: DT:IS OPT:
	 * SEQ11 住所表示コード LEN: DT:ID OPT:
	 * SEQ12 住所有効範囲 LEN: DT:DR OPT:
	 * 
	 *        
	 */
	class XAD extends GenericField {
		private $streetAddress; // SEQ1 通りの住所
		private $otherDesignation; // SEQ2 その他表示
		private $city; // SEQ3 市
		private $stateOrProvince; // SEQ4 州または省
		private $zipOrPostalCode; // SEQ5 ZIPコードまたは郵便番号
		private $country; // SEQ6 国
		private $addressType; // SEQ7 住所型
		private $otherGeographicDesignation; // SEQ8 その他の地理表示
		private $countyParishCode; // SEQ9 郡/郡コード
		private $censusTract; // SEQ10 国勢調査区域
		private $addressRepresentationCode; // SEQ11 住所表記コード
		private $addressValidityRange; // SEQ12 住所有効範囲
		private $effectiveDate; // SEQ13 発行日付
		private $expirationDate; // SEQ14 失効日付
		public function parse() {
			parent::validate ();
			$this->streetAddress = $this->components [0];
			$this->otherDesignation = $this->components [1];
			$this->city = $this->components [2];
			$this->stateOrProvince = $this->components [3];
			$this->zipOrPostalCode = $this->components [4];
			$this->country = $this->components [5];
			$this->addressType = $this->components [6];
			$this->otherGeographicDesignation = $this->components [7];
			$this->countyParishCode = $this->components [8];
			$this->censusTract = $this->components [9];
			$this->addressRepresentationCode = $this->components [10];
			$this->addressValidityRange = $this->components [11];
			$this->effectiveDate = $this->components [12];
			$this->expirationDate = $this->components [13];
		}
		public function getStreetAddress() {
			return $this->streetAddress;
		}
		public function getOtherDesignation() {
			return $this->otherDesignation;
		}
		public function getCity() {
			return $this->city;
		}
		public function getStateOrProvince() {
			return $this->stateOrProvince;
		}
		public function getZipOrPostalCode() {
			return $this->zipOrPostalCode;
		}
		public function getCountry() {
			return $this->country;
		}
		public function getAddressType() {
			return $this->addressType;
		}
		public function getOtherGeographicDesignation() {
			return $this->otherGeographicDesignation;
		}
		public function getCountyParishCode() {
			return $this->countyParishCode;
		}
		public function getCensusTract() {
			return $this->censusTract;
		}
		public function getAddressRepresentationCode() {
			return $this->addressRepresentationCode;
		}
		public function getAddressValidityRange() {
			return $this->addressValidityRange;
		}
		public function getEffectiveDate() {
			return $this->effectiveDate;
		}
		public function getExpirationDate() {
			return $this->expirationDate;
		}
	}
}