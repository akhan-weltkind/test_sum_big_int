<?php

namespace App;

require_once __DIR__ . '/Interfaces/FormatterInterface.php';

use App\Interfaces\FormatterInterface;

class Calculator
{
	private $firstNumber;
	private $secondNumber;
	private $result;
	private $formatter;

	/**
	 * @param string $firstNumber
	 * @param string $secondNumber
	 */
	public function __construct(string $firstNumber, string $secondNumber, FormatterInterface $formatter)
	{
		$this->firstNumber  = $firstNumber;
		$this->secondNumber = $secondNumber;
		$this->formatter    = $formatter;
		$this->transorm();
	}

	/**
	 * Функция складывает 2 болших числа.
	 *
	 * @return $this
	 */
	public function adding()
	{
		$result  = "";
		$isResidue = 0;
		for ($i=strlen($this->firstNumber) - 1; $i >= 0; $i--) { 
			$sum = $this->firstNumber[$i] + $this->secondNumber[$i];
			if ($isResidue) {
				$sum++;
				$isResidue = false;
			}

			if ($this->isLast($i)) {
				$sum    = strrev($sum);
				$result .= $sum;
			} elseif ($sum > 9) {
				$isResidue = true;
				$result  .= $sum % 10; 
			} else {
				$result .= $sum;
			}
		}
		
		$this->result = strrev($result);

		return $this;
	}

	/**
	 * Функция распечатывает результат.
	 */
	public function result()
	{
		$this->formatter->format($this->firstNumber, $this->secondNumber, $this->result);
	}

	/**
	 * Функция Приводит оба значения к одиннаковой длинне.
	 */
	private function transorm()
	{
		$i = 0;
		while (isset($this->firstNumber[$i]) || isset($this->secondNumber[$i])) {
			if (!isset($this->firstNumber[$i])) {
				$this->firstNumber[$i] = '0';
			}

			if (!isset($this->secondNumber[$i])) {
				$this->secondNumber[$i] = '0';
			}

			$i++;
		}
	}

	/**
	 * Функция проверяет является ли итерация последней.
	 *
	 * @param int $position
	 * @return bool
	 */
	private function isLast(int $position) : bool
	{
		return ($position) ? false : true;
	}
}