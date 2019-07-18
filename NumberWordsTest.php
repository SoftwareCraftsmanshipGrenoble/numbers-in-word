<?php


use PHPUnit\Framework\TestCase;

require 'code.php';

class NumberWordsTest extends TestCase
{
	public function testNumberLessThanTen()
	{
		$expectedResults = array(
			'un',
			'deux',
			'trois',
			'quatre',
			'cinq',
			'six',
			'sept',
			'huit',
			'neuf'
		);

		$inputNumbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
		$actualResults = array_map('numberToWord', $inputNumbers);

		$this->assertEquals($expectedResults, $actualResults);
	}
}
