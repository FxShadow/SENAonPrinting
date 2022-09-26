<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    public function supplyCategories(){
        return $this->hasMany(CategoriesForSupply::class);
    }

    public function supplyUnitMeasures(){
        return $this->hasMany(UnitMeasureForSupply::class);
    }

    public function supplyDetails(){
        return $this->hasMany(SupplyDetail::class);
    }

}


