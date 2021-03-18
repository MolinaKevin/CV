<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Box;
use Spatie\Translatable\HasTranslations;


class Step extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $translatable = ['description'];

    protected $fillable = ['init','end','title','description','place','key'];

    /** Getters **/

    public function getBeginAttribute($value) {
        return Carbon::parse($this->init)->year;
    }

    public function getFinishAttribute($value) {
        return Carbon::parse($this->end)->year == "1950" ? "Hoy" :  Carbon::parse($this->end)->year ;
    }

    /** Relations **/

    public function boxes()
    {
        return $this->hasMany(Box::class);
    }

}
