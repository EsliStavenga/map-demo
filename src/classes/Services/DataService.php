<?php

namespace Services;

use Exceptions\InvalidArgumentException;

class DataService
{
	private const MIN_LAT = 51.255609;
	private const MAX_LAT = 51.753420;

	private const MIN_LNG = -0.470830;
	private const MAX_LNG = 0.290961;

	private const DESC_CHARACTERS = ["x","M","a","q","R","Z","D","n","Q","t","y","U","K","t"];

	public static function generatePOIs(int $limit = 10): array
	{
		if($limit < 0 || $limit > 100) {
			throw new InvalidArgumentException('Limit must be between %s and %s, supplied %s', 0, 100, $limit);
		}

		$result = [];

		for($i = 0; $i < $limit; $i++) {
			//limited the coordinates to be generated around London
			$lat = FloatService::randomFloat(self::MIN_LAT, self::MAX_LAT);
			$lng = FloatService::randomFloat(self::MIN_LNG, self::MAX_LNG);
			$result[] =
				[
					'lat' => $lat,
					'lng' => $lng,
					'description' => self::getDescriptionByCoordinates($lat, $lng)
				];
		}

		return $result;
	}

	/**
	 * This will generate a semi unique description per latitude, longitude
	 *
	 * @param float $lat
	 * @param float $lng
	 * @return string
	 */
	public static function getDescriptionByCoordinates(float $lat = 51.536088, float $lng = -0.085078): string
	{
		//this will cause floating point errors, however this seed is just for fun
		//I wouldn't take it into production
		$total = ($lat + $lng) * 2;
		$totalInt = FloatService::removeDotFromFloat($total);
		$splitTotal = str_split(((string) $totalInt));

		$result = '';

		for($i = 0, $max = count($splitTotal); $i < $max; $i++) {
			$digit = $splitTotal[$i];
			$nextDigit = $splitTotal[min($i+1, $max)];

			$result .= self::DESC_CHARACTERS[abs($digit - $nextDigit)];
		}

		return $result;
	}

}
