<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Screenshot extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $translatable = ['title','subtitle','content'];

    protected  $fillable = ['path','title','subtitle','content','box_id'];

    /** Relations **/

    public function box() {
        return $this->belongsTo(Box::class);
    }
}
