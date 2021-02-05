<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Box extends Model
{
    use HasFactory;

    protected  $fillable = ['name','icon','content','type','step_id'];

    /** Relations **/

    public function products() {
        return $this->belongsToMany(Product::class)->inRandomOrder();
    }
}
