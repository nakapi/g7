<?php

namespace mg\g7 {

	class Exception extends \Exception {
		public function __construct($message, $code = 0, Exception $previous = null) {
			parent::__construct ( $message, $code, $previous );
		}
		public function __toString() {
			echo $this->getTraceAsString();
			return __CLASS__ . ":[{$this->code}]:{$this->message}\n";
		}
	}
}