<?php

namespace App\Interfaces;

interface FormatterInterface
{
	public function format(string $firstNumber, string $secondNumber, string $result);
}