<?php

namespace mg\g7\hl7v2\v25\datatype {

	use mg\g7\hl7v2\v25\GenericField;

	define ( "V25_DT_XTN_COMPONENT_MAX", 12 );
	/**
	 * データ型:拡張テレコミュニケーション番号
	 * JAHIS 臨床検査データ交換規約Ver3.0
	 * SEQ1 電話番号 LEN:194 DT:ST OPT:B
	 * SEQ2 テレコミュニケーション用途コード LEN:3 DT:ID OPT:O
	 * SEQ3 テレコミュニケーション装置型 LEN:8 DT:ID OPT:O
	 * SEQ4 電子メールアドレス LEN:199 DT:ST OPT:O
	 * SEQ5 国コード LEN:3 DT:NM OPT:O
	 * SEQ6 区域/市コード LEN:5 DT:NM OPT:O
	 * SEQ7 市内番号 LEN:9 DT:NM OPT:O
	 * SEQ8 内線 LEN:5 DT:NM OPT:O
	 * SEQ9 任意のテキスト LEN:199 DT:ST OPT:O
	 * SEQ10 内線接頭辞 LEN:4 DT:ST OPT:O
	 * SEQ11 短縮番号コード LEN:6 DT:ST OPT:O
	 * SEQ12 非定形の電話番号 LEN:199 DT:ST OPT:C
	 *
	 * JAHIS 病名情報データ交換規約Ver2.0
	 * SEQ1 電話番号 LEN: DT:C any text OPT:
	 * SEQ2 通信使用コード LEN: DT:ID OPT:
	 * SEQ3 通信機器 LEN: DT:ID OPT:
	 * SEQ4 電子メールアドレス LEN: DT:ST OPT:
	 * SEQ5 国番号 LEN: DT:NM OPT:
	 * SEQ6 地域市外局番 LEN: DT:NM OPT:
	 * SEQ7 電話番号 LEN: DT:NM OPT:
	 * SEQ8 内線番号 LEN: DT:NM OPT:
	 * SEQ9 any text LEN: DT:ST OPT:
	 * 
	 *        
	 */
	class XTN extends GenericField {
		private $telephoneNumber; // SEQ1 電話番号
		private $telecommunicationUseCode; // SEQ2 テレコミュニケーション用途コード
		private $telecommunicationEquipmentType; // SEQ3 テレコミュニケーション装置型
		private $emailAddress; // SEQ4 電子メールアドレス
		private $countryCode; // SEQ5 国コード
		private $areaCityCode; // SEQ6 区域/市コード
		private $localNumber; // SEQ7 市内番号
		private $extension; // SEQ8 内線
		private $anyText; // SEQ9 任意のテキスト
		private $extensionPrefix; // SEQ10 内線接頭辞
		private $speedDialCode; // SEQ11 短縮番号コード
		private $unformattedTelephoneNumber; // SEQ12 非定形の電話番号
		public function parse() {
			parent::validate ();
			$this->telephoneNumber = $this->components [0];
			$this->telecommunicationUseCode = $this->components [1];
			$this->telecommunicationEquipmentType = $this->components [2];
			$this->emailAddress = $this->components [3];
			$this->countryCode = $this->components [4];
			$this->areaCityCode = $this->components [5];
			$this->localNumber = $this->components [6];
			$this->extension = $this->components [7];
			$this->anyText = $this->components [8];
			$this->extensionPrefix = $this->components [9];
			$this->speedDialCode = $this->components [10];
			$this->unformattedTelephoneNumber = $this->components [11];
		}
		public function getTelephoneNumber() {
			return $this->telephoneNumber;
		}
		public function getTelecommunicationUseCode() {
			return $this->telecommunicationUseCode;
		}
		public function getTelecommunicationEquipmentType() {
			return $this->telecommunicationEquipmentType;
		}
		public function getEmailAddress() {
			return $this->emailAddress;
		}
		public function getCountryCode() {
			return $this->countryCode;
		}
		public function getAreaCityCode() {
			return $this->areaCityCode;
		}
		public function getLocalNumber() {
			return $this->localNumber;
		}
		public function getExtension() {
			return $this->extension;
		}
		public function getAnyText() {
			return $this->anyText;
		}
		public function getExtensionPrefix() {
			return $this->extensionPrefix;
		}
		public function getSpeedDialCode() {
			return $this->speedDialCode;
		}
		public function getUnformattedTelephoneNumber() {
			return $this->unformattedTelephoneNumber;
		}
	}
}