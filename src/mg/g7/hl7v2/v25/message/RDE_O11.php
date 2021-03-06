<?php

namespace mg\g7\hl7v2\v25\message {

	use mg\g7\hl7v2\v25\GenericMessage;
	use mg\g7\hl7v2\v25\segment\MSH;
	use mg\g7\hl7v2\v25\segment\PID;
	use mg\g7\hl7v2\v25\segment\PV1;
	use mg\g7\hl7v2\v25\segment\ORC;
	use mg\g7\SegmentsAggregate;
	use mg\g7\hl7v2\v25\segment\RXE;
	use mg\g7\hl7v2\v25\segment\RXR;
	use mg\g7\hl7v2\v25\segment\TQ1;

	class RDE_O11 extends GenericMessage {
		protected $structure;
		protected $segments;
		/**
		 */
		public function __construct() {
			$this->structure = array (
					"MSH" => SEGMENT_REQUIRED,
					"PID" => SEGMENT_NOT_REQUIRED,
					"PV1" => SEGMENT_NOT_REQUIRED,
					"AL1" => array (
							"AL1" => SEGMENT_NOT_REQUIRED 
					),
					"ORDER" => array (
							// 処方・注射共通
							"ORC" => SEGMENT_REQUIRED,
							"RXE" => SEGMENT_REQUIRED,
							"TQ1" => array (
									"TQ1" => SEGMENT_REQUIRED 
							),
							"RXR" => array (
									"RXR" => SEGMENT_REQUIRED 
							),
							// 構造化注射オーダ
							"RXC" => array (
									"RXC" => SEGMENT_NOT_REQUIRED 
							),
							"OBX" => array (
									"OBX" => SEGMENT_NOT_REQUIRED 
							),
							"CTI" => array (
									"CTI" => SEGMENT_NOT_REQUIRED 
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
					SSMIX2_FIELD_OPTION_O,//注射「C」
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,//注射「N」
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_O,//注射「C」
					SSMIX2_FIELD_OPTION_C,//注射「N」
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N //注射「O」
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
		public function validateRXC($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_O 
			);
			$this->genericValidate ( $obj, $option );
		}
		public function validateOBX($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_C,
					SSMIX2_FIELD_OPTION_O,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_N,
					SSMIX2_FIELD_OPTION_R,
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
		public function validateCTI($obj) {
			$option = array (
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_R,
					SSMIX2_FIELD_OPTION_C,
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
		public function getRXC() {
			return $this->getType ( $this->segments, "RXC", false, true );
		}
		public function getRXE() {
			return $this->getType ( $this->segments, "RXE", true, false );
		}
		public function getORDER() {
			return $this->getType ( $this->segments, "ORDER", true, true );
		}
	}
}