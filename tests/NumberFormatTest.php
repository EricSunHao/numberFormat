<?php

require '../vendor/autoload.php';

$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);