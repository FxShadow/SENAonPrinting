<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitMeasures extends Model
{
    use HasFactory;

    public function unitMeasureForSupply(){
        return $this->hasMany(UnitMeasureForSupply::class);
    }

    public function supplyDetails(){
        return $this->hasMany(SupplyDetail::class);
    }
}
