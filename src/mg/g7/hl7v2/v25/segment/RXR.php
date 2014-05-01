<?php

namespace mg\g7\hl7v2\v25\segment {

	use mg\g7\hl7v2\v25\GenericSegment;
	use mg\g7\Exception;

	const V25_RXR_FIELDS_NUM = 7;
	class RXR extends GenericSegment {
		public function __construct($fields, $encodingCharacter) {
			parent::__construct ( $fields, $encodingCharacter );
			$this->addField ( "ST", $fields [0], 3, false );
			$this->addField ( "CWE", $fields [1], 250, false );
			$this->addField ( "CWE", $fields [2], 250, false );
			$this->addField ( "CWE", $fields [3], 250, false );
			$this->addField ( "CWE", $fields [4], 250, false );
			$this->addField ( "CWE", $fields [5], 250, false );
			$this->addField ( "CWE", $fields [6], 250, false );
		}
		public function parse() {
			if (count ( $this->fields ) < V25_RXR_FIELDS_NUM) {
				throw new Exception ( __CLASS__ . " FIELDS LACK :" . count ( $this->fields ) );
			}
			parent::_parse ();
		}
		// RXR-0 セグメントID
		public function getSegmentId() {
			return $this->getField ( 0 );
		}
		// RXR-1 経路
		public function getRoute() {
			return $this->getField ( 1 );
		}
		// RXR-2 部位
		public function getSite() {
			return $this->getField ( 2 );
		}
		// RXR-3 投薬装置
		public function getAdministrationDevice() {
			return $this->getField ( 3 );
		}
		// RXR-4 投薬方法
		public function getAdministrationMethod() {
			return $this->getField ( 4 );
		}
		// RXR-5 経路指示
		public function getRoutingInstruction() {
			return $this->getField ( 5 );
		}
		// RXR-6 投薬現場モディファイア
		public function getAdministrationSiteModifier() {
			return $this->getField ( 6 );
		}
	}
}
