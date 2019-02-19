<?php

require_once __DIR__ . '/../App/Calculator.php';
require_once __DIR__ . '/../App/Formatter/Formatter.php';

use App\Calculator;
use App\Formatter\Formatter;

$firstNumber  = '95555555555555555555555555';
$secondNumber = '955555555555555555555555551';


$formatter  = new Formatter();
$calculator = new Calculator($firstNumber, $secondNumber, $formatter);

$calculator->adding()->result();