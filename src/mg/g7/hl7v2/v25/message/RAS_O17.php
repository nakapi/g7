<?php

namespace mg\g7\hl7v2\v25\message {

	use mg\g7\hl7v2\v25\GenericMessage;
	use mg\g7\SegmentsAggregate;

	class RAS_O17 extends GenericMessage {
		protected $structure;
		protected $segments;
		/**
		 */
		public function __construct() {
			$this->structure = array (
					"MSH" => SEGMENT_REQUIRED,
					"PID" => SEGMENT_NOT_REQUIRED,
					"AL1" => array (
							"AL1" => SEGMENT_NOT_REQUIRED 
					),
					"PV1" => SEGMENT_NOT_REQUIRED,
					"ORDER" => array (
							"ORC" => SEGMENT_REQUIRED,
							"RXE" => SEGMENT_NOT_REQUIRED,
							"TQ1" => array (
									"TQ1" => SEGMENT_REQUIRED 
							),
							"RXR" => array (
									"RXR" => SEGMENT_REQUIRED 
							),
							"ADMINISTRATION" => array (
									"RXA" => array (
											"RXA" => SEGMENT_REQUIRED 
									),
									"RXR" => SEGMENT_REQUIRED 
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
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateRXE($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
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
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateTQ1($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateRXR($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateRXA($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
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
		public function getPID() {
			return $this->getType ( $this->segments, "PID", false, false );
		}
		public function getPV1() {
			return $this->getType ( $this->segments, "PV1", false, false );
		}
		public function getAL1() {
			return $this->getType ( $this->segments, "AL1", false, true );
		}
		public function getORC() {
			return $this->getType ( $this->segments, "ORC", true, true );
		}
		public function getTQ1() {
			return $this->getType ( $this->segments, "TQ1", false, true );
		}
		public function getRXR() {
			return $this->getType ( $this->segments, "RXR", false, false );
		}
		public function getRXE() {
			return $this->getType ( $this->segments, "RXE", true, false );
		}
		public function getORDER() {
			return $this->getType ( $this->segments, "ORDER", true, true );
		}
		public function getADMINISTRATION($node) {
			return $this->getType ( $node, "ADMINISTRATION", true, true );
		}
	}
}