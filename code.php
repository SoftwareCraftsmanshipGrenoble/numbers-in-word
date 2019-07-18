<?php

function numberToWord(int $number)
{
	if ($number == 1)
	{
		return 'un';
	}
	if ($number == 2)
	{
		return 'deux';
	}
	if ($number == 3)
	{
		return 'trois';
	}
	if ($number == 4)
	{
		return 'quatre';
	}
	if ($number == 5)
	{
		return 'cinq';
	}
	if ($number == 6)
	{
		return 'six';
	}
	if ($number == 7)
	{
		return 'sept';
	}
	if ($number == 8)
	{
		return 'huit';
	}
	if ($number == 9)
	{
		return 'neuf';
	}

	return null;
}