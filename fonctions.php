<?php
function calculerPrixLocation(int $age, float $tarifbase): float
{  if ($age > 65) {
        
        $tariffinal = $tarifbase + 20*($tarifbase)/100;
    }
    return $tariffinal;}
function getBadgeCategorie(string $code): array
{
    switch ($code) {
        case 'ROUGE':
            return ['libelle' => 'urgence absolue'];
        case 'ORANGE':
            return ['libelle' => 'urgence relative'];
        case 'VERT':
            return ['libelle' => 'consultation stansard'];
        default:
            return ['libelle' => 'Inconnue'];
    }
}
