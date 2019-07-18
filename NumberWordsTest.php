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
		9 => 'neuf'
	);

	public function testNumberLessThanTen()
	{
		$expectedResults = array_values($this->scenarios);
		$numbers = array_keys($this->scenarios);
		$actualResults = array_map('numberToWord', $numbers);

		$this->assertEquals($expectedResults, $actualResults);
	}
}
