<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Box;

class Product extends Model
{
    use HasFactory;

    protected  $fillable = ['name','icon','tech','me'];

    public function boxes() {
        return $this->belongsToMany(Box::class);
    }

}
