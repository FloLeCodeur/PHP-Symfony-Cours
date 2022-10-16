<?php 

namespace App\Taxes;

class Calculator {
  public function calcul(float $prix): float {
    return $prix + ($prix*(20/100));
  }
 }