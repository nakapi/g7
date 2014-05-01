<?php

namespace mg\g7\hl7v2\v25\message {

	use mg\g7\hl7v2\v25\GenericMessage;
	use mg\g7\SegmentsAggregate;

	class ADT_A54 extends GenericMessage {
		public function __construct() {
			$this->structure = array (
					"MSH" => SEGMENT_REQUIRED,
					"EVN" => SEGMENT_REQUIRED,
					"PID" => SEGMENT_REQUIRED,
					"PV1" => SEGMENT_REQUIRED 
			);
			$this->segments = new SegmentsAggregate ();
		}
		public function parse($msg) {
			$this->parseSegment ( $msg );
			return $this;
		}
		public function validate() {
		}
		public function validateMSH($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateEVN($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_RE 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validatePID($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validatePV1($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function getMSH() {
			return $this->getType ( $this->segments, "MSH", true, false );
		}
		public function getSFT() {
			return $this->getType ( $this->segments, "SFT", false, true );
		}
		public function getEVN() {
			return $this->getType ( $this->segments, "EVN", true, false );
		}
		public function getPID() {
			return $this->getType ( $this->segments, "PID", true, false );
		}
		public function getPD1() {
			return $this->getType ( $this->segments, "PD1", false, false );
		}
		public function getROL() {
			return $this->getType ( $this->segments, "ROL", false, true );
		}
		public function getPV1() {
			return $this->getType ( $this->segments, "PV1", true, false );
		}
		public function getPV2() {
			return $this->getType ( $this->segments, "PV2", false, false );
		}
	}
}