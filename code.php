<?php
function numberToWord(int $number)
{
	$unit = $number % 10;
	$unitWord = unitToWord($unit);
	$tens = intdiv($number, 10);
	$tensWord = tensToWord($tens);

	if ($tensWord)
	{
		if ($unit === 0)
		{
			return $tensWord;
		}
		if ($unit === 1)
		{
			return $tensWord.' et '.$unitWord;
		}

		return $tensWord.'-'.$unitWord;
	}

	return $unitWord;
}


function unitToWord(int $unit)
{
	switch ($unit)
	{
		case 1:
			return 'un';
		case 2:
			return 'deux';
		case 3:
			return 'trois';
		case 4:
			return 'quatre';
		case 5:
			return 'cinq';
		case 6:
			return 'six';
		case 7:
			return 'sept';
		case 8:
			return 'huit';
		case 9:
			return 'neuf';
		default:
			return null;
	}
}

function tensToWord(int $tens)
{
	switch ($tens)
	{
		case 2:
			return 'vingt';
		case 3:
			return 'trente';
		default:
			return null;
	}
}
