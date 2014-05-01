<?php

namespace mg\g7\hl7v2\v25\message {

	use mg\g7\hl7v2\v25\GenericMessage;
	use mg\g7\SegmentsAggregate;

	class ADT_A60 extends GenericMessage {
		public function __construct() {
			$this->structure = array (
					"MSH" => SEGMENT_REQUIRED,
					"EVN" => SEGMENT_REQUIRED,
					"PID" => SEGMENT_REQUIRED,
					"PV1" => SEGMENT_NOT_REQUIRED,
					"IAM" => array (
							"IAM" => SEGMENT_NOT_REQUIRED 
					) 
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
		public function validateIAM($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function getMSH() {
			return $this->getType ( $this->segments, "MSH", true, false );
		}
		public function getEVN() {
			return $this->getType ( $this->segments, "EVN", true, false );
		}
		public function getPID() {
			return $this->getType ( $this->segments, "PID", true, false );
		}
		public function getPV1() {
			return $this->getType ( $this->segments, "PV1", false, false );
		}
		public function getIAM() {
			return $this->getType ( $this->segments, "IAM", false, true );
		}
	}
}