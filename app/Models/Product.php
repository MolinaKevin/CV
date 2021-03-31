<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Box;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $translatable = ['agregar'];

    protected  $fillable = ['name','icon','tech','me','agregar'];

    public function boxes() {
        return $this->belongsToMany(Box::class);
    }

}
