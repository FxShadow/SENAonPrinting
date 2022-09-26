<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesForSupply extends Model
{
    use HasFactory;

    public function supply(){
        return $this->belongsTo(Supply::class);
    }

    public function supplyCategory(){
        return $this->belongsTo(SupplyCategory::class);
    }
}
