<?php


use PHPUnit\Framework\TestCase;

require 'code.php';

class NumberWordsTest extends TestCase
{
	private $scenarios = array(
		1 => 'un',
		2 => 'deux',
		3 => 'trois',
		4 => 'quatre',
		5 => 'cinq',
		6 => 'six',
		7 => 'sept',
		8 => 'huit',
		9 => 'neuf',
		// TODO: 10-19
		20 => 'vingt',
		21 => 'vingt et un',
		22 => 'vingt-deux',
		23 => 'vingt-trois',
		30 => 'trente',
		31 => 'trente et un',
		38 => 'trente-huit',
	);

	public function testNumberLessThanTen()
	{
		$expectedResults = array_values($this->scenarios);
		$numbers = array_keys($this->scenarios);
		$actualResults = array_map('numberToWord', $numbers);

		$this->assertEquals($expectedResults, $actualResults);
	}
}
