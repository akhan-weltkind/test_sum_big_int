<?php

namespace App\Formatter;

require_once __DIR__ . '/../Interfaces/FormatterInterface.php';

use App\Interfaces\FormatterInterface;

class Formatter implements FormatterInterface
{
	/**
	 * Функция печатает числа в заданом формате 
	 *
	 * @param string $firstNumber
	 * @param string $secondNumber
	 * @param string $result
	 */
	public function format(string $firstNumber, string $secondNumber, string $result)
	{
		echo 'First number: ' . $firstNumber . '<br>';
		echo 'Second number: ' . $secondNumber . '<br>';
		echo 'Result: ' . $result;
	}
}