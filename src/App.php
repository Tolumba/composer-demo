<?php
namespace Tolumbas\Demo;

class App extends Base\Runable {

	protected $_factory;

	public function __construct() {
		$this->_factory = new Factory();
	}

	public final function run() {

		if ( file_exists( dirname( dirname( __FILE__ ) ) . DIRECTORY_SEPARATOR . '.conf' ) ) {
			$this->_factory
				->get( 'Front' )
				->run();
		} else {
			$this->_factory
				->get( 'Installer' )
				->run();
		}

		return $this;
	}
}
