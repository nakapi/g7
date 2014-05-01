<?php

namespace mg\g7 {

	interface Message {
		function parse($msg);
		function validate();
	}
}