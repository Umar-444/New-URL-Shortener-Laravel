<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class ShortLink extends Model
{
    protected $fillable = [
        'code',
        'link'
    ];

    /**
     * Get the short URL for this link
     */
    public function getShortUrlAttribute()
    {
        return url($this->code);
    }

    /**
     * Find a link by its code
     */
    public static function findByCode($code)
    {
        return static::where('code', $code)->first();
    }

    /**
     * Check if a code already exists
     */
    public static function codeExists($code)
    {
        return static::where('code', $code)->exists();
    }
}
