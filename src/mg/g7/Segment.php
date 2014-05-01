<?php

namespace mg\g7 {

	interface Segment {
		public function __construct($row, $encodingCharacter);
		public function parse();
	}
}