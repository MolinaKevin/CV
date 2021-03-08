<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screenshot extends Model
{
    use HasFactory;

    protected  $fillable = ['path','title','subtitle','content','box_id'];

    /** Relations **/

    public function box() {
        return $this->belongsTo(Box::class);
    }
}
