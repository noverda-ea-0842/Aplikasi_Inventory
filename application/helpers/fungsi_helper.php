<?php

function indo_currency($nominal){
	$result = "Rp " . number_format($nominal, 2, ',', '.');
	return $result;
}

function indo_date($date){
	$d = substr($date, 8, 2);
	$m = substr($date, 5, 2);
	$y = substr($date, 0, 4);
	return $d.'/'.$m.'/'.$y;
}