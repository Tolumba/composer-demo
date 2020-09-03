<?php
namespace Tolumbas\Demo\Base;

abstract class Runable {
	public function run() {
		echo get_class( $this ) . ' ran';
	}
}
