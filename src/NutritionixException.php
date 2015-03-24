<?php

namespace Adcuz\Nutritionix;

class NutritionixException extends \Exception
{
	/**
	 * Array mapping error codes to messages
	 */
	public static $error_messages = array(
		'application_not_found' => 'Invalid App ID',
		'brand_not_found' => 'The Brand isn\'t on the Database',
	);
	/**
	 * Format error message
	 */
	public function __toString(){
		if ($this->message)
			return $this->message;
		else
			return 'Unknown Error';
	}
}
