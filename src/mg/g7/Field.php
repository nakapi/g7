<?php

namespace mg\g7 {

	define ( "SSMIX2_FIELD_OPTION_R", "R" );
	define ( "SSMIX2_FIELD_OPTION_RE", "RE" );
	define ( "SSMIX2_FIELD_OPTION_O", "O" );
	define ( "SSMIX2_FIELD_OPTION_C", "C" );
	define ( "SSMIX2_FIELD_OPTION_N", "N" );
	interface Field {
		public function parse();
	}
}