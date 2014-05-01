<?php

namespace mg\g7\hl7v2\v25\message {

	use mg\g7\hl7v2\v25\GenericMessage;
	use mg\g7\Exception;
	use mg\g7\SegmentsAggregate;

	class OMD_O03 extends GenericMessage {
		public function __construct() {
			$this->structure = array (
					"MSH" => SEGMENT_REQUIRED,
					"PID" => SEGMENT_NOT_REQUIRED,
					"PV1" => SEGMENT_NOT_REQUIRED,
					"AL1" => array (
							"AL1" => SEGMENT_NOT_REQUIRED 
					),
					"ORDER" => array (
							"ORC" => SEGMENT_REQUIRED,
							"TQ1" => array (
									"TQ1" => SEGMENT_NOT_REQUIRED 
							),
							"ODS" => array (
									"ODS" => SEGMENT_NOT_REQUIRED 
							) 
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
		public function validateAL1($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateORC($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
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
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateTQ1($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateODS($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function getMSH() {
			return $this->getType ( $this->segments, "MSH", true, false );
		}
		public function getPID() {
			return $this->getType ( $this->segments, "PID", false, false );
		}
		public function getPV1() {
			return $this->getType ( $this->segments, "PV1", false, false );
		}
		public function getORDER() {
			return $this->getType ( $this->segments, "ORDER", false, false );
		}
	}
}