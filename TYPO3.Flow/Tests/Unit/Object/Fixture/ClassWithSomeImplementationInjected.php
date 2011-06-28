<?php
namespace TYPO3\FLOW3\Tests\Object\Fixture;

class ClassWithSomeImplementationInjected {

	public $argument1;
	public $argument2;
	public $optionalSetterArgument;

	/**
	 * The constructor
	 *
	 * @param \TYPO3\FLOW3\Tests\Object\Fixture\SomeInterface $argument1
	 * @param \TYPO3\FLOW3\Tests\Object\Fixture\BasicClass $argument2
	 */
	public function __construct(\TYPO3\FLOW3\Tests\Object\Fixture\SomeInterface $argument1, \TYPO3\FLOW3\Tests\Object\Fixture\BasicClass $argument2) {
		$this->argument1 = $argument1;
		$this->argument2 = $argument2;
	}

	/**
	 * A setter for dependency injection
	 *
	 * @param  \TYPO3\FLOW3\TestPackage\SomeInterface $setterArgument
	 * @return void
	 */
	public function injectOptionalSetterArgument(\TYPO3\FLOW3\Tests\Object\Fixture\SomeInterface $setterArgument) {
		$this->optionalSetterArgument = $setterArgument;
	}
}
?>