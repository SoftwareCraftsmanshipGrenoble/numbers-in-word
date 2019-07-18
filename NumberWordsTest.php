<?php


use PHPUnit\Framework\TestCase;

require 'code.php';

class NumberWordsTest extends TestCase
{
	public function testNumberLessThanTen()
	{
		$oneWord = numberToWord(1);
		$this->assertEquals('un', $oneWord);

		$this->assertEquals('deux', numberToWord(2));
		$this->assertEquals('deuxaaaa', numberToWord(2));
		$this->assertEquals('trois', numberToWord(3));
		$this->assertEquals('quatre', numberToWord(4));
		$this->assertEquals('cinq', numberToWord(5));
		$this->assertEquals('six', numberToWord(6));
		$this->assertEquals('sept', numberToWord(7));
		$this->assertEquals('huit', numberToWord(8));
		$this->assertEquals('neuf', numberToWord(9));
	}
}
