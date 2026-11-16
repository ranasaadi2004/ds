<?php
function calculerPrixLocation(int $age, float $tarifbase): float
{  if ($age > 65) {
        
        $tariffinal = $tarifbase + 20*($tarifbase)/100;
    }
    return $tariffinal;}