<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use HasFactory;

    protected $guarded = [];


    public static function boot()
    {
        parent::boot();

        static::saving(function (Video $video) {
            $video->video_code = static::extractVideoCode($video->link);
        });
    }

    public static function extractVideoCode($url)
    {
        $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%';
        preg_match($pattern, $url, $matches);
        return $matches[1] ?? null;
    }

    public function channel(): BelongsTo
    {
        return $this->belongsTo(Channel::class);
    }
}
