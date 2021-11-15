<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class GiftService{
	
	
	public $gifts = ["flowers", "car", "piano", "money", "eggnog", "pizza", "coal", "bowling", "cheese"];

	public function __construct(LoggerInterface $logger)
	{
		$logger->info("Gifts were randomized");
		shuffle($this->gifts);
	}
	
}