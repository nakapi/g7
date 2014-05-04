<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_RXC_FIELDS_NUM = 10;
	class RXC extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "ID", $fields [1], 1, false );
			$this->addField ( "CWE", $fields [2], 250, false );
			$this->addField ( "NM", $fields [3], 20, false );
			$this->addField ( "CWE", $fields [4], 250, false );
			$this->addField ( "NM", $fields [5], 20, false );
			$this->addField ( "CWE", $fields [6], 250, false );
			$this->addField ( "CWE", $fields [7], 250, true );
			$this->addField ( "NM", $fields [8], 5, false );
			$this->addField ( "CWE", $fields [9], 250, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_RXC_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// RXC-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// RXC-1 RX成分タイプ
		public function getRxComponentType() {
			return $this->getField ( 1 );
		}
		// RXC-2 成分コード
		public function getComponentCode() {
			return $this->getField ( 2 );
		}
		// RXC-3 成分量
		public function getComponentAmount () {
			return $this->getField ( 3 );
		}
		// RXC-4 成分単位
		public function getComponentUnits() {
			return $this->getField ( 4 );
		}
		// RXC-5 成分力価
		public function getComponentStrength() {
			return $this->getField ( 5 );
		}
		// RXC-6 成分力価単位
		public function getComponentStrengthUnits() {
			return $this->getField ( 6 );
		}
		// RXC-7 補足コード
		public function getSupplementaryCode() {
			return $this->getField ( 7 );
		}
		// RXC-8 成分薬力価量
		public function getComponentDrugStrengthVolume() {
			return $this->getField ( 8 );
		}
		// RXC-9 成分力価量単位
		public function getComponentDrugStrengthVolumeUnits() {
			return $this->getField ( 9 );
		}
	}
}
