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

    public function getUrlAttribute()
    {
        if (strpos($this->path, 'images/') === 0) {
            return asset($this->path);
        }

        return asset('storage/images/' . $this->path);
    }

    /** Relations **/

    public function box() {
        return $this->belongsTo(Box::class);
    }
}
