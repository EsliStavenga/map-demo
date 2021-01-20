<?php

namespace Services;

class FloatService
{

	public static function randomFloat($min = 0, $max = 1, $precision = 10)
	{
		return number_format(($min + ($max - $min) * (mt_rand() / mt_getrandmax())), $precision);
	}

	/**
	 * Remove the dot from a float
	 * Will transform 50.123 into 50123
	 *
	 * @param float $float
	 * @return int
	 */
	public static function removeDotFromFloat($float): int
	{
		if(fmod($float, 1) != 0) {
			return self::removeDotFromFloat($float * 10);
		}

		return $float;
	}

}
