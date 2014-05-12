<?php
class CalcTest extends PHPUnit_Framework_TestCase {
	public function testPositiveValues() 
	{
		$calc = new Calc();

		$this->assertTrue(4 === $calc->add(2, 2));
	}
}
