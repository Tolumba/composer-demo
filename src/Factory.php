<?php

namespace Tolumbas\Demo;

class Factory {

	protected $_registry = [];

	public final function spawn( string $classname ) {

		try {

			if ( class_exists( $classname ) ) {

				$instance = new $classname();

			} else if ( class_exists ( __NAMESPACE__ . '\\' . $classname ) ) {

				$namespaced = __NAMESPACE__ . '\\' . $classname;
				$instance = new $namespaced();

			}

		} catch ( \Exception $e ) {

			error_log( $e->getMessage() );

		}

		if( ! $instance ) {

			throw new \Exception( "Unable to spawn \"{$classname}\", no such Class", 1 );

		}

		$this->_registry[$classname] = $instance;

		return $this;
	}

	public final function get( string $classname ) {

		if ( array_key_exists( $classname, $this->_registry ) ) {

			return $this->_registry[$classname];

		}

		return $this->spawn( $classname )->get( $classname );
	}
}
